<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_mvc/signup_view.inc.php';
require_once 'includes/login_mvc/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">

        <button type="submit">Login</button>
    </form>

    <?php
    check_login_errors();

    ?>


    <h2>Signup</h2>
    <form action="includes/signup.inc.php" method="post">

        <?php
        signup_inputs();
        ?>

        <button type="submit">Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>

</body>

</html>