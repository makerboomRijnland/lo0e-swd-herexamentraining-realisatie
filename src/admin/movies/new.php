<?php
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';
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
        <h1>New Movie</h1>

        <form method="POST">
            <p>
                <label for="movie_title">Title</label>
                <input type="text" name="movie[title]" id="movie_title">
            </p>

            <p>
                <label for="movie_description">Description</label>
                <input type="text" name="movie[description]" id="movie_description">
            </p>

            <p>
                <label for="movie_release_year">Release year</label>
                <input type="number" minlength="4" maxlength="4" name="movie[release_year]" id="movie_release_year">
            </p>

            <p>
                <label for="movie_length">Length</label>
                <input type="number" name="movie[length]" id="movie_length">
            </p>

            <p>
                <label for="movie_full_text">Full Text</label><br>
                <textarea name="movie[full_text]" id="movie_full_text" cols="30" rows="10"></textarea>
            </p>

            <p>
                <button name="new_movie" type="submit">Create</button>
            </p>

        </form>

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
    </main>
</body>

</html>