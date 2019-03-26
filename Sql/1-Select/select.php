<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL exercices</title>
    <link rel="icon" href="../../../assets/images/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <style>h2,h1{margin:20px auto;};</style>
</head>
<body>
    <div class="jumbotron">
        <a href="../../../index.html"><img id="accueil" src="../../../assets/images/icon.png"></a>
        <h1 class="text-center">SQL exercices</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 1</h2>
                <pre><code>
                    SELECT ville
                    FROM météo;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 2</h2>
                <pre><code>
                    SELECT ville, haut
                    FROM météo;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Drill 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 3</h2>
                <pre><code>
                    SELECT ville, bas
                    FROM météo;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 4</h2>
                <pre><code>
                    SELECT ville, haut
                    FROM météo
                    WHERE haut > 27;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 5</h2>
                <pre><code>
                    SELECT ville, bas
                    FROM météo
                    WHERE bas <= 15;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 6</h2>
                <pre><code>
                    SELECT ville, bas
                    FROM météo
                    WHERE bas = 15;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 7</h2>
                <pre><code>
                    SELECT ville, bas
                    FROM météo
                    WHERE bas <> 15;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 8</h2>
                <pre><code>
                    SELECT ville
                    FROM météo
                    WHERE ville LIKE 'Br%';
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 9</h2>
                <pre><code>
                    SELECT ville, haut
                    FROM météo
                    WHERE haut >= 26 AND haut <= 28;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 10</h2>
                <pre><code>
                    SELECT ville, bas
                    FROM météo
                    WHERE bas = 14 OR bas = 16;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 11</h2>
                <pre><code>
                    SELECT ville, haut, bas
                    FROM météo
                    WHERE haut >= 26 AND bas < 14;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Drill 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 1</h2>
                <pre><code>
                    SELECT *
                    FROM octocats;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 2</h2>
                <pre><code>
                    SELECT firstname
                    FROM octocats;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 3</h2>
                <pre><code>
                    SELECT firstname, lastname, age
                    FROM octocats;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 4</h2>
                <pre><code>
                    SELECT lastname
                    FROM octocats
                    WHERE lastname LIKE 'N%';
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 5</h2>
                <pre><code>
                    SELECT firstname
                    FROM octocats
                    WHERE promo = 'promo1-central';
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 6</h2>
                <pre><code>
                    SELECT firstname, lastname, birthdate
                    FROM octocats
                    WHERE promo = 'promo1-anderlecht';
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Drill 3</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 1</h2>
                <pre><code>
                    SELECT firstname, lastname
                    FROM octocats
                    ORDER BY firstname ASC ;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 2</h2>
                <pre><code>
                    SELECT firstname, lastname
                    FROM octocats
                    ORDER BY lastname DESC;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 3</h2>
                <pre><code>
                    SELECT firstname, lastname, age
                    FROM octocats
                    ORDER BY age ASC;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 4</h2>
                <pre><code>
                    SELECT firstname, lastname, age
                    FROM octocats
                    ORDER BY age DESC;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 5</h2>
                <pre><code>
                    SELECT firstname, lastname, age
                    FROM octocats
                    WHERE promo = "promo1-central"
                    ORDER BY age ASC;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 6</h2>
                <pre><code>
                    SELECT firstname, lastname, age
                    FROM octocats
                    WHERE promo = "promo1-central"
                    AND age >= 23 && age <= 28
                    ORDER BY age ASC;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 7</h2>
                <pre><code>
                    SELECT firstname, lastname, age, gender
                    FROM octocats
                    WHERE promo = "promo1-central"
                    AND age >= 23 && age <= 35
                    ORDER BY age ASC;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 8</h2>
                <pre><code>
                    SELECT firstname, lastname, age, gender
                    FROM octocats
                    WHERE promo = "promo1-central"
                    AND age >= 23 && age <= 35
                    AND gender = "M"
                    ORDER BY age ASC;
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 9</h2>
                <pre><code>
                    SELECT firstname, lastname, MAX(age)
                    FROM octocats
                    WHERE promo = "promo1-central";
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Drill 4</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 1</h2>
                <pre><code>
                    SELECT count(gender)
                    FROM octocats
                    WHERE gender = 'M';
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 2</h2>
                <pre><code>
                    SELECT count(gender)
                    FROM octocats
                    WHERE gender = 'F'
                    AND promo = 'promo1-central';
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 3</h2>
                <pre><code>
                    SELECT count(gender)
                    FROM octocats
                    WHERE gender = 'M'
                    AND promo = 'promo1-central';
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Exercice 4</h2>
                <pre><code>
                    SELECT count(firstname)
                    FROM octocats
                    WHERE firstname = "Nadia";
                </code></pre>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Exercice 5</h2>
                <pre><code>
                    SELECT firstname, LEFT(birthdate, 4)
                    FROM octocats;
                </code>
                <p>OR :</p>
                <code>
                    SELECT firstname, YEAR(birthdate)
                    FROM octocats;
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center">Bonus : Météo</h2>
                <h3 class="text-center">1/</h3>
                <pre><code>
                    SELECT MAX(haut)
                    FROM Météo;
                </code></pre>
                <h3 class="text-center">2/</h3>
                <pre><code>
                    SELECT MIN(bas)
                    FROM Météo;
                </code></pre>
            </div>
        </div>
    </div>
    <script src="../../../assets/javascript/script.js"></script>
</body>
</html>