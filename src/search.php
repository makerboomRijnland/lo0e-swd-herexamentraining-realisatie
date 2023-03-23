<?php
    require_once './lib/conf.php';
    require_once './models/category.php';
    require_once './models/movie.php';

    if(isset($_GET['search'])) {
        $search_criteria = $_GET['search_movie'];
        $movies = Movie::search($search_criteria);
    } else {
        $search_criteria = array('title' => null, 'actor' => null, 'category' => null);
    }

    $categories = Category::get_list();
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
                <input type="text" name="search_movie[title]" id="search_movie_title" value="<?= $search_criteria['title'] ?>">
            </p>
            
            <p>
                <label for="search_movie_actor">Actor</label>
                <input type="text" name="search_movie[actor]" id="search_movie_actor" value="<?= $search_criteria['actor'] ?>">
            </p>
            
            <p>
                <label for="search_movie_category">Category</label>
                <select name="search_movie[category]" id="search_movie_category"> 
                    <option value="">------</option>

                    <?php foreach ($categories as $id => $name) { ?>
                        <option value="<?= $id ?>" <?= $search_criteria['category'] == $id ? 'selected' : '' ?>>
                            <?= $name ?>
                        </option>
                    <?php } ?>

                </select>
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
                    <li><a href="/movie.php?id=<?= $movie->id ?>"><?= $movie->title ?></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </main>
</body>
</html>