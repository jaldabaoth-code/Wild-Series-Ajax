<h1>Wild Series Ajax (Symfony Workshop, WCS Web PHP)</h1>

### There are "Symfony Workshop" we did during WCS Web PHP

---

### Description

You can see a search input inside the navigation bar, it works well, but you can improve it with autocomplete.
You should edit `assets/autocomplete.js` and add the needed code.

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

---

## The Links

<a href="https://github.com/WildCodeSchool/orleans-202103-php-workshop-ajax">Link to the repository of <b>The Symfony Workshop - Wild Series Ajax</b></a>
