<?php 
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

    $movie = Movie::get($_GET['id']);
    if(is_null($movie)) {
        die("No movie!");
    }

    if(isset($_POST['movie'])) {
        $movie->update($_POST['movie']);
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

    <!-- 
    public $id;
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
    public $full_text;

    -->

    <form method="POST">
        <h3>Details</h3>

        <dl>
            <dt>ID</dt>
            <dd><input type="number" name="movie[id]" id="movie_id" value="<?= $movie->id ?>"></dd>

            <dt>Title</dt>
            <dd><input type="text" name="movie[title]" id="movie_id" value="<?= $movie->title ?>"></dd>

            <dt>Description</dt>
            <dd><textarea name="move[description" id="movie_description" cols="30" rows="10" maxlength="255"><?= $movie->description ?></textarea></dd>

            <dt>Release year</dt>
            <dd><input type="number" name="movie[release_year]" id="movie_release_year" value="<?= $movie->release_year ?>" minlength="4" maxlength="4"></dd>

            <dt>Length</dt>
            <dd><input type="number" name="movie[length]" id="movie_length" value="<?= $movie->length ?>"> hrs</dd>

            <dt>Special features</dt>
            <dd>None</dd>
        </dl>

        <h3>Rental info</h3>

        <dl>
            <dt>Rental duration</dt>
            <dd><input type="number" name="movie[rental_duration]" id="movie_rental_duration" value="<?= $movie->rental_duration ?>"> days</dd>   

            <dt>Rental rate</dt>
            <dd>&dollar; <input type="number" name="movie[rental_rate]" id="movie_rental_rate" value="<?= $movie->rental_rate ?>"></dd>

            <dt>Replacement cost</dt>
            <dd>&dollar; <input type="number" name="movie[replacement_cost]" id="movie_replacement_cost" value="<?= $movie->replacement_cost ?>"></dd>
        </dl>

        <h3>Full text</h3>

        <p>
            <textarea name="move[full_text]" id="movie_full_text" cols="30" rows="10"><?= $movie->full_text ?></textarea>
        </p>

        <p>
            <button type="submit">Update</button>
        </p>
    </form>
    
    

</body>
</html>