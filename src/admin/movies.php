<?php 
    require_once '../lib/conf.php';
    require_once '../models/movie.php';

    $movies = Movie::all();
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
    <?php include '../partials/_header.php'; ?>

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
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Length</th>
                <th>Rating</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($movies as $movie) { ?>
                <tr>
                    <th><a href="./movies/show.php?id=<?= $movie->id ?>"><?= $movie->id ?></a></th>
                    <td><a href="./movies/edit.php?id=<?= $movie->id ?>"><?= $movie->title ?></a></td>
                    <td><?= $movie->length ?> hrs</td>
                    <td><?= $movie->rating ?> / 10</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>