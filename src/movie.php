<?php
    require_once './lib/conf.php';
    require_once './models/movie.php';

    if(!isset($_GET['id'])) {
        header("Location: /");
        die();
    }
    $movie = Movie::get($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Rental System</title>
</head>
<body>
    <?php include './partials/_header.php'; ?>
    <main>
        <article class='movie'>
            <h1 class='title'><?= $movie->title ?></h1>
            <p class='description'><?= $movie->description ?></p>
        </article>
    </main>
</body>
</html>