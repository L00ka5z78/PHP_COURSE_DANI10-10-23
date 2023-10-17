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
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">

        <button type="submit">Signup</button>
    </form>

    <?php
    require_once 'Classess/Car.php';

    $car01 = new Car("mitsubishi", "red");
    // echo $car01->setBrand("toyota");
    // echo $car01->getBrand();

    $car01->setColor("pinky");
    echo $car01->getColor();

    ?>



</body>

</html>