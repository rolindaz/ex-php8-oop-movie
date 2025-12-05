<?php
class Movie
{
    // all'interno della classe sono dichiarate delle variabili d'istanza

    public $title;
    public $release_year;
    public $director;
    public $runtime;
    public $poster_url;

    // ogni film ha un genere
    // Modificare la classe Movie in modo che accetti piú di un genere.

    public $genre = [];

    use Soundtrack;

    // all'interno della classe è definito un costruttore

    function __construct($_title, $_release_year, $_director, $_genres)
    {
        $this->title = $_title;
        $this->release_year = $_release_year;
        $this->director = $_director;
        $this->genre = $_genres;
    }

    // all'interno della classe è definito almeno un metodo

    public function isOld()
    {
        return $this->release_year <= 1980;
    }

    public function getGenres()
    {
        $genre_names = [];
        foreach ($this->genre as $genre) {
            $genre_names[] = $genre->name;
        };

        return implode(", ", $genre_names);
    }
}

$titanic = new Movie("Titanic", 1997, "James Cameron", [new Genre("Romantico", "Si concentra sulle storie d'amore, spaziando da commedie leggere a drammi intensi."), new Genre("Avventura", "Segue i protagonisti in un viaggio o in un'impresa avventurosa, spesso in luoghi esotici o pericolosi.")]);

$ladri_di_biciclette = new Movie("Ladri di Biciclette", 1948, "Vittorio De Sica", [new Genre("Drammatico", "Esplora temi seri e profondi, concentrandosi sulle relazioni umane e sui conflitti emotivi."), new Genre("Thriller", "Si basa sul mistero, l'indagine e la suspense, spesso con elementi di suspense o polizieschi.")]);
