<?php
    require_once './lib/conf.php';
    require_once './models/movie.php';

    if(isset($_GET['search'])) {
        $movies = Movie::search($_GET['search_movie']);
    }
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
        <form action="search.php" method="GET">
            <p>
                <label for="search_movie_title">Title</label>
                <input type="text" name="search_movie[title]" id="search_movie_title">
            </p>

            <p>
                <button type="submit" name="search">Search</button>
            </p>
        </form>

        <?php if(!isset($movies)) { ?>
            <p>No movies found</p>
        <?php } else { ?>
            <ul>
                <?php foreach($movies as $movie) { ?>
                    <li><?= $movie->title ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </main>
</body>
</html>