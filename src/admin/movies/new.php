<?php 
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

    $movie = new Movie();

    if(isset($_POST['movie'])) {
        if($movie->update($_POST['movie'])) {
            header("Location: ./show.php?id=".$movie->id);
            exit();
        }
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
        <h1>New movie</h1>
    
        <form method="POST">
            <?php include './_form.php'; ?>

            <p>
                <button type="submit">Create</button>
            </p>
        </form>
    </main>
    

</body>
</html>