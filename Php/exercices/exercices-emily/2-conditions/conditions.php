<?php
//EX 1
$age = 23; // SET INPUT IN INTEGER
if ($age >= 18) {
    $age = "vous êtes majeur";
} else {
    $age = "vous êtes mineur";
};
//EX 2
$IsEasy = true; // SET INPUT IN BOOLEAN
if ($IsEasy = true) {
    $IsEasy = "C'est facile !";
} else {
    $IsEasy = "C'est difficile !!!";
};
// EX 3
$genre = true; // SET INPUT IN BOOLEAN
if ($genre == true) {
    $genre = "vous êtes un homme";
} else {
    $genre = "vous êtes une femme";
}
//EX 4
$magnitude = 4; // SET INPUT FROM 1 TO 9
$phrases = array("1"=>"Micro-séisme impossible à ressentir.","2"=>"Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.","3"=>"Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.","4"=>"Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.","5"=>"Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.","6"=>"Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.","7"=>"Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.","8"=>"Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.","9"=>"Séisme capable de tout détruire sur une très vaste zone.");
//EX 5 traduire : echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
if ($maVariable != 'Homme') {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
};
//EX 6 Traduire : echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
if ($monAge >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
};
//EX 7 Traduire : echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!!';
if ($maVariable == false) {
    echo "c'est pas bon !!!";
} else {
    echo "c'est ok !!!";
};
//EX 8 Traduire : echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
if (!$maVariable) {
    echo "c'est ok";
} else {
    echo "c'est pas bon";
};
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
    <style>pre{background-color : black ;color:white;};</style>
</head>
<body>
    <div class="jumbotron">
        <a href="../../../index.html"><img id="accueil" src="../../../assets/images/icon.png"></a>
        <h1 class="text-center">Php exercices - conditions</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 1</h2>
                <p><?=$age;?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <p><?=$IsEasy;?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <p><?=$genre;?> et <?=$age?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <p><?=$phrases[$magnitude];?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 5</h2>
                <p> Traduire : echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';</p>
                <pre>
                    <code>
                        if ($maVariable != 'Homme') {
                            echo "C'est une développeuse !!!";
                        } else {
                            echo "C'est un développeur !!!";
                        };
                    </code>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 6</h2>
                <p> Traduire : echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';</p>
                <pre>
                    <code>
                        if ($monAge >= 18) {
                            echo "Tu es majeur";
                        } else {
                            echo "Tu n'es pas majeur";
                        }
                    </code>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 7</h2>
                <p> Traduire : echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';</p>
                <pre>
                    <code>
                        if ($maVariable == false) {
                            echo "c'est pas bon !!!";
                        } else {
                            echo "c'est ok !!!";
                        };
                    </code>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 8</h2>
                <p> Traduire : echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';</p>
                <pre>
                    <code>
                        if (!$maVariable) {
                            echo "c'est ok"
                        } else {
                            echo "c'est pas bon"
                        };
                    </code>
                </pre>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>