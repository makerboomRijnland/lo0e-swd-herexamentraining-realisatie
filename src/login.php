<?php
    require_once './lib/conf.php';
    require_once './models/client.php';

    if(isset($_POST['login'])) {
        $client = Client::login($_POST['email'], $_POST['password']);
        if($client) {
            $_SESSION['client_id'] = $client->id;
            header('Location: /dashboard.php');
            die();
        } else {
            $login_error = "Incorrect login credentials.";
        }
    }
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
        <form action="login.php" method="POST">
            <?php if(isset($login_error)) { ?>
                <p class="error"><?= $login_error ?>
            <?php } ?>
            <p>
                <label for="login_email">Email:</label>
                <input type="email" name="email" id="login_email">
            </p>
            <p>
                <label for="login_password">Password:</label>
                <input type="password" name="password" id="login_password">
            </p>
            <p>
                <button type="submit" name="login">Login</button>
            </p>
        </form>
    </main>
</body>
</html>