<?php

declare(strict_types=1);
function signup_inputs()
{


    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" name="username" placeholder="username..." value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" name="username" placeholder="username...">';
    }
    echo '<input type="password" name="pwd" placeholder="password...">';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {

        echo '<input type="email" name="email" placeholder="email..." value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="email" name="email" placeholder="email...">';
    }
}

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p style="color:pink; text-align:center">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p style="color:blue; text-align:center">Signup success!</p>';
    }
}
