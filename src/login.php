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
            <p>
                <label for="login_email">Email:</label>
                <input type="email" name="email" id="login_email">
            </p>
            <p>
                <label for="login_password">Email:</label>
                <input type="password" name="password" id="login_password">
            </p>
            <p>
                <button type="submit">Login</button>
            </p>
        </form>
    </main>
</body>
</html>