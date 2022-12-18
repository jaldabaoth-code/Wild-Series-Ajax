<h1>Wild Series Ajax (Symfony Workshop, WCS Web PHP)</h1>

### There are "Symfony Workshop" we did during WCS Web PHP

---

### Steps

1. Clone the repo from GitHub : `git@github.com:jaldabaoth-code/Wild-Series-Ajax.git`
2. Enter the directory : `cd Wild-Series-Ajax`
3. Open with your code editor
4. Run `composer install` to install PHP dependencies
5. Run `yarn install` to install JS dependencies
6. Run `cp .env .env.local` and configure your `DATABASE_URL`
7. Run `symfony console doctrine:database:create` to create database
8. Run `symfony console doctrine:migration:migrate` to create structure of database
9. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
10. Run `yarn encore dev` to build assets
11. Run `symfony server:start` to launch symfony server
12. Go to <b>localhost:8000</b> with your favorite browser


# Autocomplete with AJAX

To run the project, first make a `.env.local` file with the configuration of your database, then:

    composer install
    yarn install
    yarn encore dev

Create the database if needed with:

    symfony console doctrine:database:create
    symfony console doctrine:migrations:migrate

Seed the database if needed with:

    symfony console doctrine:fixtures:load

Run the server:

    symfony server:start

Now open the homepage: you can see a search input inside the navigation bar.
Try it: it works well, but you can improve it with autocomplete.

# Server side

Take a look at `ProgramController::autocomplete`: the action should return a search result, but through JSON instead of a rendered Twig template.
You can look at `ProgramController::search` to help you.

You can test your code through this url: http://127.0.0.1/programs/autocomplete?q=fear

# Client side

Edit `assets/autocomplete.js`, and add the needed code to fetch the server when the input value changes.

Modify DOM to add results in a list just below the search bar (use the `<ul id="autocomplete">`).

Remember to clean everything if the input value is empty ;)
