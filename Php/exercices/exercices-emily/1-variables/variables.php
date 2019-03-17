<?php
//EX 1
$nom = "Wauquier";
$prenom = "Teddy";
$age = 23;
//EX 2
$km = 1;
//EX 3
$string = "string variable";
$integer = 1337;
$float = 1.337;
$boolean = true;
//EX 4
$null = null;
//EX 5
$sept = 3+4;
$cent = 5*20;
$neuf = 45/5;
//EX 6
$prix = 785;
$ristourne = $prix * 0.3;
$prixfinal = $prix - $ristourne;
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
        <h1 class="text-center">Php exercices - variables</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 1</h2>
                <p>Bonjour <?=$prenom;?>, enfant de la famille <?=$nom;?> ayant atteint le level <?=$age;?>!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <p><?=$km;?> then <?php $km = 3; echo $km;?> then <?php $km = 125; echo $km;?>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <p>création de variables différentes : </p>
                <ul>
                    <li>String : <?=$string;?></li>
                    <li>integer : <?=$integer;?></li>
                    <li>float : <?=$float;?></li>
                    <li>boolean : <?=$boolean;?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <p>voici null : <?=$null;?>Et voici null réattribué : <?php $null = 1337; echo $null;?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 5</h2>
                <p>quelques calculs : </p>
                <ul>
                    <li>3 + 4 = <?=$sept;?></li>
                    <li>5 * 20 = <?=$cent;?></li>
                    <li>45 / 5 = <?=$neuf;?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 6</h2>
                <p>Voici les prix :</p>
                <ul>
                    <li>prix : <?=$prix?> €</li>
                    <li>ristourne <?=$ristourne?> €</li>
                    <li>prix final : <?=$prixfinal?> €</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice X</h2>
                <p>X-X-X</p>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>