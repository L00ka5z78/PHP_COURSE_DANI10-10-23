<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        //one method
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        // $stmt = $pdo->prepare($query);

        // $stmt->execute([$username, $pwd, $email]);

        //second way

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
