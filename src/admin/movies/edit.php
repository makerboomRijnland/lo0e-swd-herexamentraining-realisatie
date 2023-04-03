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

    <main>
        <h1>Edit movie</h1>
        <form method="POST">
            <?php include './_form.php'; ?>

            <p>
                <button type="submit">Update</button>
            </p>
        </form>
    </main>
</body>
</html>