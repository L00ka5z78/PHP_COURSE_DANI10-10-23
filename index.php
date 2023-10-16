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
    <h3>
        <?php
        output_username();
        ?>
    </h3>

    <?php
    if (!isset($_SESSION["user_id"])) { ?>
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="username...">
            <input type="password" name="pwd" placeholder="password...">

            <button type="submit">Login</button>
        </form>

    <?php } ?>

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

    <h2>Logout</h2>
    <form action="includes/logout.inc.php" method="post">
        <button type="submit">Logout</button>
    </form>

</body>

</html>