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

    <form action="POST">
        <h3>Details</h3>

        <dl>
            <dt>ID</dt>
            <dd><input type="number" name="movie[id]" id="movie_id" value="1"></dd>

            <dt>Title</dt>
            <dd><input type="text" name="movie[title]" id="movie_id" value="Movie A"></dd>

            <dt>Description</dt>
            <dd><textarea name="move[description" id="movie_description" cols="30" rows="10">Movie A is the best movie you can watch.</textarea></dd>

            <dt>Release year</dt>
            <dd><input type="number" name="movie[release_year]" id="movie_release_year" value="2021" minlength="4" maxlength="4"></dd>

            <dt>Length</dt>
            <dd><input type="number" name="movie[length]" id="movie_length" value="2"> hrs</dd>

            <dt>Special features</dt>
            <dd>None</dd>
        </dl>

        <h3>Rental info</h3>

        <dl>
            <dt>Rental duration</dt>
            <dd><input type="number" name="movie[rental_duration]" id="movie_rental_duration" value="7"> days</dd>   

            <dt>Rental rate</dt>
            <dd>&dollar; <input type="number" name="movie[rental_rate]" id="movie_rental_rate" value="7"></dd>

            <dt>Replacement cost</dt>
            <dd>&dollar; <input type="number" name="movie[replacement_cost]" id="movie_replacement_cost" value="54"></dd>
        </dl>

        <h3>Full text</h3>

        <textarea name="move[full_text]" id="movie_full_text" cols="30" rows="10">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Dolor eaque voluptatum at quod maxime delectus eos, 
excepturi itaque labore obcaecati ullam reiciendis hic quasi, ipsum minima. 
Nostrum eveniet ullam fugit!
        </textarea>
    </form>
    
    

</body>
</html>