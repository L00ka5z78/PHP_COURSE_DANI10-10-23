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

    <h2>Update account</h2>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">
        <input type="email" name="email" placeholder="email...">

        <button type="submit">Update</button>
    </form>

    <h2>Delete account</h2>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">

        <button type="submit">Delete</button>
    </form>

    <form class="searchform" action="search.php" method="post">
        <label for="search">Search for user:</label>
        <input for="search" type="text" name="usersearch" placeholder="search..." />

        <button type="submit">Search</button>
    </form>

</body>

</html>