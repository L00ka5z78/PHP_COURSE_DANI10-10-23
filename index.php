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

    <?php
    // $test = "danel";

    // function myFunction($test)
    // {
    //     //def local var
    //     $localVar = "hello world";
    //     //use local var
    //     return $test; //output hello world
    // }
    // echo myFunction($test);

    // $test = "danel";

    // function myFunction($test)
    // {
    //     global $test;
    //     //def local var
    //     $localVar = "hello world";
    //     //use local var
    //     return $test; //output hello world
    // }
    // echo myFunction($test);

    // $test = "danel";

    // function myFunction()
    // {
    //     global $test;
    //     //def local var
    //     $localVar = "hello world";
    //     //use local var
    //     return $GLOBALS["test"]; //output hello world
    // }
    // echo myFunction();
    // define("PI", 3.14);
    // echo PI;

    //** ********************************   loops *********************************/

    //for loop

    // for ($i = 0; $i <= 10; $i++) {
    //     echo "This is iteration number " . $i . "<br>";
    // }

    // $test = 5;
    // for ($i = 0; $i <= $test; $i++) {
    //     echo "This is iteration number " . $i . "<br>";
    // }

    // *********************** while ************************************

    // $boolean = true;
    // while ($boolean) {
    //     echo $boolean;
    //     $boolean = false;
    // }

    // $test = 5;
    // $boolean = true;
    // while ($test < 10) {
    //     echo $test;
    //     $test++;
    // }

    // ********************************* do while *****************************

    // $test = 10;
    // do {
    //     echo $test;
    //     $test++;
    // } while ($test < 10);

    // ****************** for each ***********************************

    // $fruits = array("apple", "banana", "orange");

    // foreach ($fruits as $fruit) {
    //     echo "this is: " . $fruit . "<br>";
    // }

    // displays only colors == keys *****************************

    // $fruits = array("apple" => "RED", "banana" => "YELLOW", "orange" => "ORNGE");

    // foreach ($fruits as $fruit) {
    //     echo "this is: " . $fruit . "<br>";
    // }

    // displays both: values and keys
    $fruits = array("apple" => "RED", "banana" => "YELLOW", "orange" => "ORNGE");

    foreach ($fruits as $fruit => $color) {
        echo "this is: " . $fruit . ", that hac color of " . $color . "<br>";
    }
    ?>

</body>

</html>