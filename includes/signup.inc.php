<?php
// check if user access page in right way
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_mvc/signup_model.inc.php';
        // require_once 'signup_mvc/view.inc.php';
        require_once '../signup_mvc/signup_contr.inc.php';

        //error handlers
        if (is_input_empty($username, $pwd, $email)) {
        }
        if (is_email_invalid($email)) {
        }
        if (is_username_taken($pdo, $username)) {
        }
        if (is_email_registered($pdo, $email)) {
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Loaction: ../index.php");
    die();
}
