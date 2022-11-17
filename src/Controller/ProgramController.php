<?php

namespace App\Controller;

use App\Entity\Program;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProgramController
 * @package App\Controller
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();
        return $this->render('program/index.html.twig', [
            'programs' => $programs,
        ]);
    }

    /**
     * @Route("/{id}/", name="show", methods={"GET"}, requirements={"id"="\d+"})
     * @return Response
     */
    public function show(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }

    /**
     * @Route("/search", name="search", methods={"GET"})
     * @return Response
     */
    public function search(Request $request, ProgramRepository $programRepository): Response
    {
        $query = $request->query->get('q');
        if (null !== $query) {
            $programs = $programRepository->findByQuery($query);
        }
        return $this->render('program/index.html.twig', [
            'programs' => $programs ?? [],
        ]);
    }

    /**
     * @Route("/autocomplete", name="autocomplete", methods={"GET"})
     * @return Response
     */
    public function autocomplete(Request $request, ProgramRepository $programRepository): Response
    {
        // Get value of "q" in the query string
        $query = $request->query->get('q');
        // If $query is not null, fetch every program with the value of $query inside its title
        if (null !== $query) {
            $programs = $programRepository->findByQuery($query);
        }
        // Return all programs data that have been fetched in json format
        return $this->json($programs, 200);
    }
}
