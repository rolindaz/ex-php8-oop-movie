<?php

require_once("./data/genres.php");
require_once("./data/movies.php");

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
    <div class="container mb-5">
        <h1 class="text-center my-4">
            My Movies
        </h1>
        <div class="row row-cols-2 mt-4 row-gap-3">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card py-2 px-4">
                        <div class="card-top text-center text-uppercase">
                            <h4>
                                <?php echo $movie->title ?>
                            </h4>
                        </div>
                        <div class="card-bottom py-3 d-flex justify-content-between">
                            <span>
                                <?php echo $movie->release_year ?>
                            </span>
                            <span>
                                <?php echo $movie->director ?>
                            </span>
                        </div>
                        <span class="text-center">
                            <?php echo $movie->getGenres() ?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>