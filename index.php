<?php
// session_start();
// $_SESSION["username"] = "Krossing";
// session_unset(); //unset all session data
// unset($_SESSION["username"]); //unset one session data
// session_destroy();
//unsets session ID on the server, not session id cookie in the browser

require_once 'config.php';
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

    <?php
    echo $_SESSION["username"];
    ?>
</body>

</html>