<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});


$tarantino = new Director("Quentin Jerome ", "Tarantino", "Man", "27-03-1963");
$bradpitt = new Actor("Brad", "Pitt", "Man", "18-12-1963", "Aldo Raine");

$film1 = new Movie("Inglorious Basterds", "2009", "2:33", $tarantino, "Une section Juive de l’armée Américaine terrorise les Nazis.");
$film1->getInfo() . "<br><br>";

$bradpitt->getAge() . "<br>";

// class castin: attribut(film, role, acteur)