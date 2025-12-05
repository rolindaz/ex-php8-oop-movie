<?php

class Movie
{
    public $title;
    public $release_year;
    public $director;
    public $runtime;

    function __construct($_title, $_release_year, $_director)
    {
        $this->title = $_title;
        $this->release_year = $_release_year;
        $this->director = $_director;
    }

    public function isOld()
    {
        return $this->release_year <= 1980;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
</head>

<body>

</body>

</html>