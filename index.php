<?php

declare(strict_types=1);
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
    <h2>Signup</h2>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">
        <input type="email" name="email" placeholder="email...">

        <button type="submit">Signup</button>
    </form>
</body>

</html>