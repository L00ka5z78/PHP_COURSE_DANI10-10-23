<?php

/*** firs method to connect db
 * 
 */

// $dsn = "mysql:host=localhost;dbname=myfirstdatabase";
// $dbusername = "root";
// $dbpassword = "";


// try {
//     $pdo = new PDO($dsn, $dbusername, $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

/*** second method to connect */

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
