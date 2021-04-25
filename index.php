<?php
$presentTime = new DateTime('now');
$destinationTime = new DateTime;
$destinationTime->setDate(2021,05, 05);
$destinationTime->setTime(8,03, 05);
$interval = $presentTime->diff($destinationTime);
$minutes = $interval->days * 24 * 60;
$minutes += $interval->h * 60;
$minutes += $interval->i;

$fuel = $minutes / 1000;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center ">
        <div class="d-flex justify-content-around m-2">
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> MONTH</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $destinationTime->format('M'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> DAY</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $destinationTime->format('d'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> YEAR</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $destinationTime->format('y'); ?>
                </p>
            </div>
            <div class="d-flex flex-column align-self-center">
                <p class="h4 bg-dark text-center text-uppercase text-light " >
                    <?= $destinationTime->format('A'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> HOUR</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $destinationTime->format('g'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> MIN</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $destinationTime->format('i'); ?>
                </p>
            </div>
        </div>
        <div class="bg-dark w-50 m-auto text-center text-light">
            <p class="h4">Destination Time</p>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center ">
        <div class="d-flex justify-content-around m-2">
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> MONTH</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $presentTime->format('M'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> DAY</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $presentTime->format('d'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> YEAR</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $presentTime->format('y'); ?>
                </p>
            </div>
            <div class="d-flex flex-column align-self-center">
                <p class="h4 bg-dark text-center text-uppercase text-light " >
                    <?= $presentTime->format('A'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> HOUR</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $presentTime->format('g'); ?>
                </p>
            </div>
            <div class="d-flex flex-column">
                <p class="h4 bg-danger text-center"> MIN</p>
                <p class="h4 bg-dark text-center text-uppercase text-light" >
                    <?= $presentTime->format('i'); ?>
                </p>
            </div>
        </div>
        <div class="bg-dark w-50 m-auto text-center text-light">
            <p class="h4">Présent Time</p>
        </div>
    </div>
    <div>
        <p>INTERVALLE : <?= $interval->format('%y year, %m month, %d days, %h hours, %i min') ?></p>
        <p>Fuel : <?= $fuel ?> l</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
