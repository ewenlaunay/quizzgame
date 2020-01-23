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
<br>
<body>
<div class="d-flex justify-content-center">
    <img src="img/php-logo.jpg">
</div>
<br>
<?php
$point = 0;
$correct = "C'est correct";
$incorect = "C'est incorect";

?>
<br>

<!- Question 1 ->


<div class="container d-flex justify-content-center">
    <form method="post">
        <b><p>1.Qu'est-ce qui est indispensable au bon fonctionnement d'un site web écrit avec PHP afin qu'il s'affiche
                correctement dans un navigateur ?</p></b>
        <label>
            <input type="checkbox" name="qu1" value="1"/>Un serveur web (Apache, Nginx…)
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="2"/>Un IDEe
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="3"/>Un terminal (ligne de commande)
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu1"] == 1) {
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


        <b><p>2.Sélectionnez des technologies concurrentes de PHP</p></b>
        <label>
            <input type="checkbox" name="qu2[1]" value="1"/>MySQL
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2[2]" value="2"/>Django
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2[3]" value="3"/>HTML
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2[4]" value="4"/>Ruby on Rails
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if (isset($_POST["qu2"][2]) && isset($_POST["qu2"][4])) {
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


        <b><p>3.Lequel de ces mots-clés indique à l'ordinateur de répéter des instructions ?</p></b>
        <label>
            <input type="checkbox" name="qu3" value="1"/>for
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="2"/>if
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="3"/>select
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="4"/>switch
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu3"] == 1) {
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


        <b><p>4.Laquelle de ces méthodes d'envoi est plus sûre que l'autre (on peut plus lui faire confiance) ?</p></b>
        <label>
            <input type="checkbox" name="qu4" value="1"/>GET
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="2"/>POST
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="3"/>Aucune des deux
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu4"] == 3) {
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


        <b><p>5.Que faut-il veiller à faire avant d'appeler la fonction session_start() ?</p></b>
        <label>
            <input type="checkbox" name="qu5" value="1"/>Il faut qu'il n'y ait aucun caractère HTML avant l'appel de la
            fonction
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="2"/>Il faut appeler la fonction session_init()
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="3"/>Il faut définir ses variables de session au préalable
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="4"/>Il faut définir le numéro de session de l'utilisateur
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu5"] == 1) {
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


        <b><p>6.Que représente le nombre de secondes associé à notre cookie que l'on indique dans l'appel à la fonction
                setcookie ?</p></b>
        <label>
            <input type="checkbox" name="qu6" value="1"/>Le moment (timestamp) où le cookie est créé
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="2"/>Le moment (timestamp) où le cookie doit être détruit
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="3"/>Le nombre de secondes que le cookie doit vivre avant d'être
            détruit
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu6"] == 2) {
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


        <b><p>7.Lequel de ces mots-clés permet de mettre à jour des informations dans une table ?</p></b>
        <label>
            <input type="checkbox" name="qu7" value="1"/>UPDATE
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="2"/>INSERT
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="3"/>DELETE
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="4"/>SELECT
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu7"] == 1) {
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
            <input type="checkbox" name="qu8" value="3"/>/
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="4"/>@
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
            <input type="checkbox" name="qu9" value="3"/>Mets à jour le nom et le prénom de 18 membres
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
            <input type="checkbox" name="qu10" value="3"/>Un outil de vérification d'identité
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
