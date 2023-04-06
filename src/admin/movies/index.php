<?php
    require_once '../../lib/conf.php';
    require_once '../../models/movie.php';

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
    <header>
        <nav>
            <a href="/admin/index.php">Admin</a>
            <a href="/admin/movies/index.php">Movies</a>
        </nav>
    </header>

    <main>
        <h1>Movie Overview</h1>

        <table>
            <thead>
                <th>ID</th>
                <th>Title</th>
            </thead>
            
            <tbody>
                <?php foreach($movies as $movie) { ?>
                    <tr>
                        <td><?= $movie->id ?></td>
                        <td><?= $movie->title ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>