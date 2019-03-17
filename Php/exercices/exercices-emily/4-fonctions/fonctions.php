<?php
//EX 1
function true (){
    return true;
};
//EX 2
function chain($prenom ='Teddy'){
    return $prenom;
};
//EX 3
function chains($prenom = 'Teddy',$nom = 'Wauquier'){
    return $prenom . ' ' . $nom;
};
//EX 4
function numbers($one = 1, $two = 2){
    if ($one > $two){
        return "le premier nombre est plus grand";
    } else if ($one < $two) {
        return "le premier nombre est plus petit";
    } else {
        return "les deux nombres sont identiques";
    }
};
//EX 5
function fuse($one = '1', $prenom = 'Teddy'){
    return $one . $prenom;
};
//EX 6
function triparam($nom = 'Wauquier', $prenom = 'Teddy', $age = 23){
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
};
//EX 7
function agesexe($age = 23, $sexe = 'homme'){
    if ($sexe == 'homme'){
        $sexe = "un homme";
    } else {
        $sexe = "une femme";
    };
    if ($age >= 18){
        $age = "majeur.";
    } else {
        $age = "mineur.";
    }
    return "Vous êtes " . $sexe . " et vous êtes " . $age;
};
//EX 8
$one = null;
$two = null;
$three = null;
function trinumbers( $one = 1, $two = 2, $three = 3){
    return $one + $two + $three;
}
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
        <h1 class="text-center">Php exercices</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 1</h2>
                <p><?=true();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <p><?=chain();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <p><?=chains();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <p><?=numbers();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 5</h2>
                <p><?=fuse();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 6</h2>
                <p><?=triparam();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 7</h2>
                <p><?=agesexe();?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 8</h2>
                <p><?=trinumbers();?></p>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>