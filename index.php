<?php

include('./class/car.php');
include('./lib/car.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $car = new Car();
        $namespaceCar = new \lib\Car;
        ?>
        <img src="https://media.tenor.com/MZm_GT_dD2AAAAAC/cat-driving.gif" alt="">
        <p class="text">^--- А это кот в машине</p>
    </div>

</body>

</html>