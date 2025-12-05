<?php

require_once("./Traits/Soundtrack.php");
require_once("./Models/Genre.php");
require_once("./Models/Movie.php");
require_once("./data/genres.php");

$movies = [
    $titanic = new Movie("Titanic", 1997, "James Cameron", [$romantico, $avventura]),
    $ladri_di_biciclette = new Movie("Ladri di Biciclette", 1948, "Vittorio De Sica", [$drammatico, $thriller]),
    $inception = new Movie("Inception", 2010, "Christopher Nolan", [$fantascienza, $thriller]),
    $il_padrino = new Movie("Il Padrino", 1972, "Francis Ford Coppola", [$drammatico, $crime]),
    $pulp_fiction = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", [$crime]),
    $forrest_gump = new Movie("Forrest Gump", 1994, "Robert Zemeckis", [$drammatico, $commedia]),
    $matrix = new Movie("Matrix", 1999, "Lana e Lilly Wachowski", [$fantascienza, $azione]),
    $la_vita_e_bella = new Movie("La Vita è Bella", 1997, "Roberto Benigni", [$drammatico, $commedia]),
    $interstellar = new Movie("Interstellar", 2014, "Christopher Nolan", [$fantascienza, $avventura]),
    $fight_club = new Movie("Fight Club", 1999, "David Fincher", [$drammatico, $thriller]),
    $il_cavaliere_oscuro = new Movie("Il Cavaliere Oscuro", 2008, "Christopher Nolan", [$azione, $crime]),
    $shutter_island = new Movie("Shutter Island", 2010, "Martin Scorsese", [$thriller])
];
