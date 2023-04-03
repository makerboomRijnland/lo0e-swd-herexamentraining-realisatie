<?php 
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

    $movie = Movie::get($_GET['id']);
    if(is_null($movie)) {
        die("No movie!");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Rental System - Admin Movies</title>
</head>
<body>
    <?php include '../../partials/_header.php'; ?>

    <nav>
        <a href="/admin/movies/list.php">Movies</a>
    </nav>
    
    <main>
        <h3>Details</h3>
        <dl>
            <dt>ID</dt>
            <dd><?= $movie->id ?></dd>

            <dt>Title</dt>
            <dd><?= $movie->title ?></dd>

            <dt>Description</dt>
            <dd><?= $movie->description ?></dd>

            <dt>Release year</dt>
            <dd><?= $movie->release_year ?></dd>

            <dt>Length</dt>
            <dd><?= $movie->length ?> hrs</dd>

            <dt>Special features</dt>
            <dd><?= $movie->special_features ?></dd>

            <dt>Last update</dt>
            <dd><?= empty($movie_last_update) ? "" : date_format($movie->last_update, "F jS, Y") ?></dd>
        </dl>

        <h3>Rental info</h3>

        <dl>
            <dt>Rental duration</dt>
            <dd><?= $movie->rental_duration ?> days</dd>   

            <dt>Rental rate</dt>
            <dd>&dollar; <?= $movie->rental_rate ?>,00</dd>

            <dt>Replacement cost</dt>
            <dd>&dollar; <?= $movie->replacement_cost ?>,00</dd>
        </dl>

        <h3>Full text</h3>

        <p><?= $movie->full_text ?></p>

    </main>

</body>
</html>