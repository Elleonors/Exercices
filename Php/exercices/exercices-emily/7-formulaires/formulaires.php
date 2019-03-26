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
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <h2 class="text-center">Exercice 2</h2>
            <form action="formulaires.php" method="post">
                <p>Votre nom :  <input type="text" name="nom" /></p>
                <p>Votre prenom :  <input type="text" name="prenom" /></p>
                <p><input type="submit" value="ok"></p>
            <p>Bonjour, <?php echo htmlspecialchars($_POST['nom']) . " " . htmlspecialchars($_POST['prenom']); ?>.</p>
            </form>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>