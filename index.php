<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});


// $tarantino = new Director("Quentin Jerome ", "Tarantino", "Man", "27-03-1963");
// $bradpitt = new Actor("Brad", "Pitt", "Man", "18-12-1963");
// $bradpitt2 = new Actor("Brad2", "Pitt2", "Man2", "18-12-1963");
// $autredirector = new Director ("qqqq", "aaaaa", "aaaa", "19-12-1999");

// $film1 = new Movie("Inglorious Basterds", "2009", "2:33", $tarantino, "Une section Juive de l’armée Américaine terrorise les Nazis.");
// $film1->getInfo() . "<br><br>";

// $film2 = new Movie("Un autre film de bradpitt", "1990", "2:00", $autredirector, "il se passe des choses");

// $role1 = new role("Aldo Raine");
// $role2 = new role ("un autre role de bradp");

// $casting1 = new Casting($film1, $role1, $bradpitt);
// $casting2 = new Casting($film2, $role2, $bradpitt);

// $bradpitt->getAge();

// echo "<br>";
// echo $bradpitt->getFilmographie();

// // var_dump($bradpitt->getCasting());

// // getfilmgraphie affiche pas les différent éléments (films d'un acteur)

$superhero = new Genre ("super-héro");
$action = new Genre ("Action");
$scifi = new Genre ("Science-Fiction");

$georgeclooney = new Actor("George", "Clooney", "Man", "06-05-1961");
$christianbale = new Actor ("Christian", "Bale", "Man", "30-01-1974");
$healthledger = new Actor ("Health", "Ledger","Man", "04-04-1979");

$christophernolan = new Director ("Christopher", "Nolan", "Man", "30-07-1970");
$joelschumacher = new Director("Joel","Schumacher", "Man", "29-08-1939");
$maryharron = new Director ("Mary", "Harron", "Woman", "12-01-1953");

$darkknight = new Movie ("The Dark Knight", "2008", "152", $christophernolan, "Batman aborde une phase décisive de sa guerre contre le crime à Gotham City...", $superhero);
$batmanandrobin = new Movie ("Batman et Robin", "1997", "125", $joelschumacher, "À Gotham City, un nouveau méchant fait régner la terreur par le froid, Mister Freeze...", $superhero);
$americanpsycho = new Movie ("American Psycho", "2000", "101", $maryharron, "Patrick Bateman, 27 ans, flamboyant golden-boy du Wall Street d'avant le krach d'octobre 1987, est un dandy beau, riche et intelligent comme tous ses amis...", $action);
$inception = new Movie ("Inception", "2010", "148", $christophernolan, "Dans un futur proche, les États-Unis ont développé ce qui est appelé le « rêve partagé », une méthode permettant d'influencer l'inconscient d'une victime pendant qu'elle rêve, donc à partir de son subconscient...", $scifi);

$batman = new Role ("Bruce Wayne aka le Batman");
$patrickbateman = new Role ("Patrick Bateman est le perso principale et narateur");
$joker = new Role ("Le Joker, l'ennemi juré de Batman");

$casting1 = new Casting($darkknight, $batman, $christianbale);
$casting2 = new Casting($batmanandrobin, $batman, $georgeclooney);
$casting3 = new Casting ($americanpsycho, $patrickbateman, $christianbale);
$casting4= new Casting ($darkknight, $joker, $healthledger);


// echo $darkknight->getGenre()."<br>";
// echo $inception->getGenre()."<br>";

// echo $superhero->getMovies()."<br>";

$darkknight->getGenre();

