<?php
//EX 1
$mois = array(1=>'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
//EX 2
$mois[8] = 'Août';
//EX 3
$auvergne = array(01 =>'Ain',03 =>'Allier',07=>'Ardèche',15=>'Cantal',26=>'Drôme',38=>'Isère',42=>'Loire',43=>'Haute-Loire',63=>'Puy-de-Dôme',69=>'Rhône',73=>'Savoie',74=>'Haute-Savoie');
//EX 3 - 3
$auvergne[57] = 'Moselle';
//EX 4
$prenoms = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
$x = 0;
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
        <h1 class="text-center">Php exercices - tableaux</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 1</h2>
                <p><?=$mois[3];?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <p><?=$mois[5];?> et <?=$mois[8]?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <p><?=$mois[69];?></p>
                <p><?php foreach($auvergne as $key => $value) {echo "le département $value a le numéro $key <br>";} ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <p><?php while ( $x <= count($prenoms)) {echo "salut " . $prenoms[$x] . ", devine quoi ! Je me marie le samedi dans deux semaine ! J'espère te compter parmi les invités ! Gros bisous :)<br>";$x++;}; ?></p>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>