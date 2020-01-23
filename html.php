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
    <img src="img/logo-html.png" alt="logo">
</div>
<br>
<br>
<?php
$point = 0;
$correct = "C'est correct";
$incorect = "C'est incorect";

?>
<!- Question 1 ->


<div class="d-flex justify-content-center">
    <form method="post">
        <b><p>1.Que doit-on écrire en CSS pour appliquer un style aux balises de titre de niveau 2 et 3 ?</p></b>
        <label>
            <input type="checkbox" name="qu1" value="1"/>h2 + h3
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="2"/>h2 h3
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="3"/>.h2 .h3
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu1" value="4"/>h2, h3
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu1"] == 4) {
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


        <b><p>2.Quelle est la particularité de l'attribut class par rapport à l'attribut id ?</p></b>
        <label>
            <input type="checkbox" name="qu2" value="1"/>Il ne peut y avoir qu'un seul et même nom d'id par page, et
            plusieurs fois une même classe
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="2"/>class est utilisable dans les vieilles versions de HTML
            mais
            pas id
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="3"/>class peut être utilisé dans un fichier .css mais pas id
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu2" value="4"/>Il n'y a strictement aucune différence entre les deux
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu2"] == 1) {
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


        <b><p>3.Peut-on utiliser n'importe quelle police sur son site web ?</p></b>
        <label>
            <input type="checkbox" name="qu3" value="1"/>Oui, à condition d'utiliser @font-face
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="2"/>Oui, à condition d'utiliser une police hébergée par Google
            Web
            Fonts uniquement
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="3"/>Oui, mais le visiteur doit obligatoirement télécharger et
            installer manuellement la police
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu3" value="4"/>Non, ce n'est pas possible du tout
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


        <b><p>4.Laquelle de ces balises représente une ligne dans un tableau ?</p></b>
        <label>
            <input type="checkbox" name="qu4" value="1"/><?php echo htmlentities('<tr>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="2"/><?php echo htmlentities('<table>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="3"/><?php echo htmlentities('<line>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu4" value="4"/><?php echo htmlentities('<td>') ?>
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu4"] == 1) {
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


        <b><p>5.Quelle est la méthode d'envoi de formulaire la plus recommandée qui permet d'envoyer le plus de
                données
                ?</p></b>
        <label>
            <input type="checkbox" name="qu5" value="1"/>get
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="2"/>action
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="3"/>post
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu5" value="4"/>submit
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu5"] == 3) {
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


        <b><p>6.Quelle balise permet aussi bien d'insérer des cases à cocher, des champs de texte monolignes et des
                sélecteurs de date ?</p></b>
        <label>
            <input type="checkbox" name="qu6" value="1"/><?php echo htmlentities('<input/>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="2"/><?php echo htmlentities('<form>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="3"/><?php echo htmlentities('<textarea>') ?>
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu6" value="4"/><?php echo htmlentities('<select/>') ?>
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


        <b><p>7.Que se passe-t-il lorsqu'on modifie en direct le code HTML et CSS au sein des outils de débogage de
                son
                navigateur ?</p></b>
        <label>
            <input type="checkbox" name="qu7" value="1"/>Le fichier source est immédiatement modifié
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="2"/>La page affichée est modifiée mais le fichier source reste
            inchangé
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="3"/>Le navigateur plante
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu7" value="4"/>Le nouveau code est transmis au serveur web
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu7"] == 2) {
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


        <b><p>8.Quel attribut dois-je utiliser si je veux fusionner deux cellules d'une même ligne dans un tableau
                ?</p>
        </b>
        <label>
            <input type="checkbox" name="qu8" value="1"/>fusion
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="2"/>colspan
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="3"/>rowspan
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu8" value="4"/>groupline
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu8"] == 2) {
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


        <b><p>9.Quelle balise permet aussi bien d'insérer des cases à cocher, des champs de texte monolignes et des
                sélecteurs de date ?</p></b>
        <label>
            <input type="checkbox" name="qu9" value="1"/>Vrai
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu9" value="2"/>Faux
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu9"] == 2) {
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


        <b><p>10.Quelle directive CSS permet de créer un site en responsive webdesign ?</p></b>
        <label>
            <input type="checkbox" name="qu10" value="1"/>@media
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu10" value="2"/>screensize
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu10" value="2"/>.handheld
        </label>
        <br/>
        <label>
            <input type="checkbox" name="qu10" value="2"/>[responsive]
        </label>
        <br/>
        <div class="d-flex justify-content-center">
            <?php
            if (isset($_POST["sub1"])) {
                if ($_POST["qu10"] == 1) {
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
<?php

?>

</body>
<footer class="bg-primary container d-flex justify-content-center copy ">
    <div class="copy2">
        <b><p>Copiright © 2020, PHP Quizz.</p></b>
    </div>

</footer>
</html>
