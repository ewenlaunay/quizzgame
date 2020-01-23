<?php
$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');
$req = $bdd->query("SELECT * FROM question3");
$correctanswer = $bdd->query("SELECT * FROM choices3");
$correctanswer->fetch();

session_start();
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
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
<body>
<div class="d-flex justify-content-center">
    <img src="img/logo-mysql.png" height="200px" alt="logo">
</div>
<br>
<br>
<div class="container d-flex justify-content-around">
    <form method="post">
        <?php
        while ($question = $req->fetch()) {
            $answer = $bdd->query("SELECT * FROM choices3 WHERE choices3.question_nb = " . $question["question_nb"]);

            ?>
            <?php echo "<h5>" . $question['text'] . "</h5>"; ?>
            <label>
                <?php
                while ($reponse = $answer->fetch()) {
                    echo "<input type='checkbox'>" . htmlentities($reponse['text']) . "<br>";
                    if ();
                }
                ?>
            </label>
            <br>
            <br>
            <?php
        }
        ?>
    </form>
</div>
    <div class="container d-flex justify-content-center">
        <input type="submit" name="sub1" class="btn btn-danger btn-block"/>
    </div>
</body>
<br>
<footer class="bg-primary container d-flex justify-content-center copy ">
    <div class="copy2">
        <b><p>Copiright © 2020, PHP Quizz.</p></b>
    </div>

</footer>
</html>
