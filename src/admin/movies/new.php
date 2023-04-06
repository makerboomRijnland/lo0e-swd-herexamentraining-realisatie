<?php
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

    // array(Title => '', 'Description', ...)
    if(isset($_POST['new_movie'])) {
        $movie = new Movie($_POST['movie']);
        if($movie->save()) {
            header("Location: /admin/movies/show.php?id=".$movie->id);
            exit();
        }
    } else {
        $movie = new Movie();
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
        <h1>New Movie</h1>

        <form method="POST">
            <p>
                <label for="movie_title">Title</label>
                <input type="text" name="movie[Title]" id="movie_title" value="<?= $movie->title ?>">
            </p>

            <p>
                <label for="movie_description">Description</label>
                <input type="text" name="movie[Description]" id="movie_description" value="<?= $movie->description ?>">
            </p>

            <p>
                <label for="movie_release_year">Release year</label>
                <input type="number" minlength="4" maxlength="4" name="movie[Release_Year]" id="movie_release_year" value="<?= $movie->release_year ?>">
            </p>

            <p>
                <label for="movie_length">Length</label>
                <input type="number" name="movie[Length]" id="movie_length" value="<?= $movie->length ?>">
            </p>

            <p>
                <label for="movie_full_text">Full Text</label><br>
                <textarea name="movie[Fulltext]" id="movie_full_text" cols="30" rows="10"><?= $movie->full_text ?></textarea>
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