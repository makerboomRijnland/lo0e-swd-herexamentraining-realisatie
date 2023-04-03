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
            <tr>
                <th><a href="./movies/edit.php?id=1">1</a></th>
                <td><a href="./movies/edit.php?id=1">Movie A</a></td>
                <td>2hrs</td>
                <td>5 / 10</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Movie B</td>
                <td>2hrs</td>
                <td>8 / 10</td>
            </tr>
        </tbody>
    </table>
</body>
</html>