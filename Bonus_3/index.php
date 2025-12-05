<?php

require_once("./Bonus_3/Traits/Soundtrack.php");
require_once("./Bonus_3/Models/Genre.php");
require_once("./Bonus_3/Models/Movie.php");

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