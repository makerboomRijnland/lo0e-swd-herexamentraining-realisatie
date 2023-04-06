<?php
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

    // if(IS_ADMIN_NIET_INGELOGD)
        // redirect naar de admin inlog.
    
    if(!isset($_GET['id'])) {
        header("Location: /admin/index.php");
        die();
    }
    $movie = Movie::get($_GET['id']);

    if(empty($movie)) {
        header("Location: /admin/movies/index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Rental System - Admin Movie</title>
</head>

<body>
    <header>
        <nav>
            <a href="/admin/index.php">Admin</a>
            <a href="/admin/movies/index.php">Movies</a>
        </nav>
    </header>

    <main>
        <h1>Movie Details</h1>

        <nav>
            <a href="/admin/movies/edit.php?id=<?= $movie->id ?>">Edit movie</a>
        </nav>

        <!-- public $id;
    public $title;
    public $description;
    public $release_year;
    public $rental_duration;
    public $rental_rate;
    public $length;
    public $replacement_cost;
    public $rating;
    public $last_update;
    public $special_features;
    public $full_text; -->

        <h2>General</h2>
        <dl>
            <dt>ID</dt>
            <dd><?= $movie->id ?></dd>

            <dt>Title</dt>
            <dd><?= $movie->title ?></dd>

            <dt>Description</dt>
            <dd><?= $movie->id ?></dd>

            <dt>Release Year</dt>
            <dd><?= $movie->release_year ?></dd>

            <dt>Length</dt>
            <dd><?= $movie->length ?></dd>
        </dl>
    </main>
</body>

</html>