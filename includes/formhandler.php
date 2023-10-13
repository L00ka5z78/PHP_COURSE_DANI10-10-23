<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)) {
        exit();
        header(("Location: ../index.php"));
    }

    echo "data that user submitted: ";
    echo "<br>";
    echo  $firstname;
    echo "<br>";
    echo  $lastname;
    echo "<br>";
    echo  $favouritepet;
    echo "<br>";

    header("Location: ../index.php");
} else {
    header(("Location: ../index.php"));
}
