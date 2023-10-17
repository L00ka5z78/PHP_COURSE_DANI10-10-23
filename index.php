<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_mvc/signup_view.inc.php';
require_once 'includes/login_mvc/login_view.inc.php';
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
    $brand = "volvo";
    $color = "green";

    function getCarInfo($brand, $color)
    {
        return "BRand: " . $brand . ", Color: " . $color;
    }

    echo getCarInfo($brand, $color);

    ?>



</body>

</html>