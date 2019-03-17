<?php
//EX 1
$int = 0;
//EX 2
$quarantedeux = 42;
//EX 3
$cent = 100;
//EX 4
$un = 1;
//EX 5
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP exercices</title>
    <link rel="icon" href="../../../assets/images/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
    <div class="jumbotron">
        <a href="../../../index.html"><img id="accueil" src="../../../assets/images/icon.png"></a>
        <h1 class="text-center">Php exercices - boucles</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 1</h2>
                <p><?php for ($int = 0; $int <= 10; $int = $int + 1) {echo $int; echo " ; ";}; $int = 0; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <p><?php while ($int < 20){echo $int * $quarantedeux . " | ";$int++;} $int = 0; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <p><?php while ($cent >= 10){echo $cent * $quarantedeux . " | ";$cent--;}; $cent = 100; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <p><?php while ($un<=10) {echo $un . " | ";$un = $un + ($un/2);}; $un = 1; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 5</h2>
                <p><?php while ($un <= 15){echo "on y arrive presque" . $un . " | "; $un++;}; $un = 1; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 6</h2>
                <p>SAME EXERCICE</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 7</h2>
                <p>SAME EXERCICE</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 8</h2>
                <p>SAME EXERCICE</p>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>