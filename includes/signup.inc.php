<?php
// check if we access page correctly

if ($_SERVER["REQUEST_METHOD"] === "post") {
    $USERNAME = $_post["USERNAME"];
    $PWD = $_post["PWD"];

    // db connection must be first because first we connect and then proceed to signup
    // parent class goes first then child (signup) in this case
    require_once "../Classess/Dbh.php";
    require_once "../Classess/Signup.php";
}
