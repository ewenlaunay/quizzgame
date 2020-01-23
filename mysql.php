<?php
$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');

session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Question 1</title>
</head>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary rounded-lg">
            <img src="img/quizz.png" height="100px" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="profil.php"><h3>Profil</h3> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="php.php"><h3>PHP</h3></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="html.php"><h3>HTML</h3></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="mysql.php"><h3>MYSQL</h3></a>
                    </li>
                    <?php
                    if (isset($_SESSION['id'])) {
                        ?>

                        <li class="nav-item active">
                            <a class="nav-link" href="deconnexion.php"><h4>Se deconnecter</h4></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="editionprofil.php"><h4>Editer profil</h4></a>
                        </li>

                        <?php
                    }
                    ?>

                </ul>
            </div>
        </nav>
    </div>

</header>
<br>
<?php
$point = 0;
$correct = "C'est correct";
$incorect = "C'est incorect";

?>
<br>
<body>
<div class="d-flex justify-content-center">
    <img src="img/logo-mysql.png" height="200px" alt="logo">
</div>
<br>
<br>

<!- Question 1 ->


<div class="d-flex justify-content-center">
    <form method="post">
        <b><p>1.Quel est le rôle d'une base de données ?</p></b>
        <label>
            <input type="checkbox" name="qu1" value="1"/>Générer du HTML
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="2"/>Effectuer des calculs complexes
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="3"/>Lire et stocker des données
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu1"] == 3) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 2 ->


        <b><p>2.Comment appelle-t-on les colonnes d'une table ?</p></b>
        <label>
            <input type="checkbox" name="qu2" value="1"/>Les entrées
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="2"/>Les bases
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="3"/>Les produits
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="4"/>Les champs
        </label>
        <br/>

        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu2"] == 4) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>

        <!- Question 3 ->


        <b><p>3.Combien d'entrées peut contenir une table ?</p></b>
        <label>
            <input type="checkbox" name="qu3" value="1"/>1
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="2"/>Entre 1 et 100
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="3"/>Entre 100 et 100 000
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="4"/>Plusieurs millions et plus encore !
        </label>
        <br/>

        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu3"] == 4) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 4 ->


        <b><p>4.Vrai ou faux ? L'utilisation de phpMyAdmin est obligatoire quand on utilise MySQL.</p></b>
        <label>
            <input type="checkbox" name="qu4" value="1"/>Vrai
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="2"/>Faux
        </label>
        <br/>


        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu4"] == 2) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 5 ->


        <b><p>5.SELECT UPPER(nom) FROM membres LIMIT 10</p></b>
        <label>
            <input type="checkbox" name="qu5" value="1"/>Récupère tous les noms de membres écrits en majuscules
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="2"/>Récupère les noms de 10 membres et transforme-les en majuscules
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="2"/>Mets à jour les noms de 10 membres pour qu'ils soient écrits en
            majuscules
        </label>
        <br/>


        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu5"] == 2) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 6 ->


        <b><p>6.Quelle requête retournerait la moyenne d'âge de tous mes membres ?</p></b>
        <label>
            <input type="checkbox" name="qu6" value="1"/>SELECT AVG(age) FROM membres
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="2"/>SELECT AVG(age) FROM membres GROUP BY nom
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="2"/>SELECT AVG(age) FROM membres LIMIT 100
        </label>
        <br/>


        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu6"] == 1) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 7 ->


        <b><p>7.Quel type de champ stocke les informations de date mais aussi d'heure ?</p></b>
        <label>
            <input type="checkbox" name="qu7" value="1"/>TIME
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="2"/>DATE
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="3"/>DATETIME
        </label>
        <br/>


        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu7"] == 3) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>


        <!- Question 8 ->


        <b><p>8.Quel symbole indique que l'on souhaite récupérer tous les champs d'une table ?</p></b>
        <label>
            <input type="checkbox" name="qu8" value="1"/>*
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="2"/>#
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="2"/>/
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="2"/>@
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu8"] == 1) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }

            ?>
        </div>
        <br>
        <br>


        <!- Question 9 ->


        <b><p>9.SELECT nom, prenom FROM membres WHERE age >= 18</p></b>
        <label>
            <input type="checkbox" name="qu9" value="1"/>Récupère le nom et le prénom des membres de 18 ans et plus
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu9" value="2"/>Récupère toutes les informations disponibles sur les membres
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu9" value="2"/>Mets à jour le nom et le prénom de 18 membres
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu9"] == 1) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }

            ?>
        </div>
        <br>
        <br>


        <!- Question 10 ->


        <b><p>10.Qu'est-ce qu'une expression régulière ?</p></b>
        <label>
            <input type="checkbox" name="qu10" value="1"/>Un programme de recherche sur internet
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu10" value="2"/>Un langage pour faire des recherches précises
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu10" value="2"/>Un outil de vérification d'identité
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu10"] == 2) {
                    $point++;
                    echo '<span style="color: green; ">' . $correct . '</span>';
                } else {
                    echo '<span style="color: red; ">' . $incorect . '</span>';
                }
            }
            ?>
        </div>
        <br>
        <br>
        <div class="d-flex justify-content-center">
            <input type="submit" name="sub1" class="btn btn-danger btn-block"/>
        </div>
    </form>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
    <b><p>Vous avez
            <?php
            if (isset($_POST["sub1"])) {
                echo $point;
            }
            ?>
            points</p></b>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
    <?php
    if (isset($_POST["sub1"])) {
        if ($point >= 0 && $point < 3) {
            echo 'Try again';
        } elseif ($point > 3 && $point < 6) {
            echo 'Peux mieux faire';
        } elseif ($point >= 6 && $point < 8) {
            echo 'Pas mal';
        } elseif ($point >= 8 && $point <= 10) {
            echo 'Perfect!';
        }
    }
    ?>

</div>

</body>
<footer class="bg-primary container d-flex justify-content-center copy ">
    <div class="copy2">
        <b><p>Copiright © 2020, PHP Quizz.</p></b>
    </div>

</footer>
</html>
