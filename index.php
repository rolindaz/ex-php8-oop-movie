<?php

/* Creare un file index.php in cui
- è definita la classe Movie */

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

// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

$titanic = new Movie("Titanic", 1997, "James Cameron", [new Genre("Romantico", "Si concentra sulle storie d'amore, spaziando da commedie leggere a drammi intensi."), new Genre("Avventura", "Segue i protagonisti in un viaggio o in un'impresa avventurosa, spesso in luoghi esotici o pericolosi.")]);

$ladri_di_biciclette = new Movie("Ladri di Biciclette", 1948, "Vittorio De Sica", [new Genre("Drammatico", "Esplora temi seri e profondi, concentrandosi sulle relazioni umane e sui conflitti emotivi."), new Genre("Thriller", "Si basa sul mistero, l'indagine e la suspense, spesso con elementi di suspense o polizieschi.")]);

/* var_dump($titanic, $ladri_di_biciclette); */

// - è definita una classe Genre
class Genre
{
    //   -> all'interno della classe sono dichiarate delle variabili d'istanza

    public $name;
    public $description;

    // all'interno della classe è definito un costruttore

    function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}

// Aggiungere un Trait alla classe Movie con almeno una proprietà e un metodo.

trait Soundtrack
{
    public $composer;
    public $available_on = [];
    public function checkSpotifyAvailability()
    {
        return in_array("Spotify", $this->available_on);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">
            My Movies
        </h1>
        <div class="row row-cols-2 mt-4">
            <div class="col">
                <div class="card p-2">
                    <div class="card-top text-center text-uppercase">
                        <h4>
                            <?php echo $titanic->title ?>
                        </h4>
                    </div>
                    <div class="card-bottom py-3 d-flex justify-content-between">
                        <span>
                            <?php echo $titanic->release_year ?>
                        </span>
                        <span>
                            <?php echo $titanic->director ?>
                        </span>
                    </div>
                    <span>
                        <?php echo $titanic->getGenres() ?>
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="card p-2">
                    <div class="card-top text-center text-uppercase">
                        <h4>
                            <?php echo $ladri_di_biciclette->title ?>
                        </h4>
                    </div>
                    <div class="card-bottom py-3 d-flex justify-content-between">
                        <span>
                            <?php echo $ladri_di_biciclette->release_year ?>
                        </span>
                        <span>
                            <?php echo $ladri_di_biciclette->director ?>
                        </span>
                    </div>
                    <span>
                        <?php echo $ladri_di_biciclette->getGenres() ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>