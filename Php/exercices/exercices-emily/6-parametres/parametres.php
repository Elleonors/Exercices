<?php
echo "theme test";
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
                <button onclick="location.href='parametres.php?nom=Nemare&prenom=Jean'">ICI</button>
                <p><?php echo $_GET['nom'] . " et " . $_GET['prenom']; ?></p>
                <p>result : yup</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 2</h2>
                <button onclick="location.href='parametres.php?nom=Nemare&prenom=Jean'">ICI</button>
                <p><?php echo $_GET['age']; ?></p>
                <p>result : nope</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 3</h2>
                <button onclick="location.href='parametres.php?dateDebut=2/05/2016&dateFin=27/11/2016'">ICI</button>
                <p><?php echo $_GET['dateDebut'] . " et " . $_GET['dateFin']; ?></p>
                <p>result : yup</p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 4</h2>
                <button onclick="location.href='parametres.php?langage=PHP&serveur=LAMP'">ICI</button>
                <p><?php echo $_GET['langage'] . " et " . $_GET['serveur']; ?></p>
                <p>result : yup</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 5</h2>
                <button onclick="location.href='parametres.php?semaine=12'">ICI</button>
                <p><?php echo $_GET['semaine']; ?></p>
                <p>result : yup</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Exercice 6</h2>
                <button onclick="location.href='parametres.php?batiment=12&salle=101'">ICI</button>
                <p><?php echo $_GET['batiment'] . " et " . $_GET['salle']; ?></p>
                <p>result : yup</p>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>