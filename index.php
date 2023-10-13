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

    // function sayHello($name)
    // {
    //     return "hello " . $name . "!";
    // }
    // $test = sayHello("danny");
    // echo $test;

    // function sayHello($name = "basse")
    // {
    //     return "hello " . $name . "!";
    // }
    // $test = sayHello();
    // echo $test;

    // function sayHello(string $name)
    // {
    //     return "hello " . $name . "!";
    // }
    // $test = sayHello("poll");
    // echo $test;

    // function calculator(int $num01, int $num02)
    // {
    //     $result = $num01 + $num02;
    //     return $result;
    // }
    // $test = calculator(2, 5);
    // echo $test;

    $test = "Daniel";

    function calculator(int $num01, int $num02)
    {
        global $test;
        $result = $num01 + $num02;
        return $test;
    }
    $test = calculator(2, 5);
    echo $test;
    ?>

</body>

</html>