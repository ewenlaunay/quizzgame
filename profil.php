<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');

if (isset($_SESSION['id'])) {
$getid = intval($_SESSION['id']);
$requser = $bdd->prepare('SELECT * FROM Joueurs WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="bootstrap/css/style.css" rel="stylesheet"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<header>
    <div class="container ">
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
                    if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
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
<div>
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <h2>Bienvenue !</h2>
    </div>
    <div class="d-flex justify-content-center">
        <br>
        <p>Es-tu prêt a battre des records <?php echo $userinfo['pseudo']; ?>?</p>
    </div>
    <div class="d-flex justify-content-center">
        <br>
        <p>Je te mets au defi de devenir la personne la plus intelligente de notre site. </p>
    </div>
    <div class="d-flex justify-content-center">
        <br>
        <p>Tente ta chance avec nos nombreux quizz disponibles.</p>
    </div>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
    <h1>Quizz</h1>
</div>
<br>
<br>
<div class="container d-flex justify-content-around">
    <div>
        <h3>PHP</h3>
        <a href="php.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>HTML</h3>
        <a href="html.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>Mysql</h3>
        <a href="mysql.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
    </div>
    <div>
        <h3>PHP</h3>
        <a href="php.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>HTML</h3>
        <a href="html.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>Mysql</h3>
        <a href="mysql.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>

    </div>
    <div>
        <h3>PHP</h3>
        <a href="php.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>HTML</h3>
        <a href="html.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
        <br>
        <br>
        <h3>Mysql</h3>
        <a href="mysql.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zééé partis</a>
    </div>

</div>

<br>
</body>
<footer class="bg-primary container d-flex justify-content-center copy ">
    <div class="copy2">
        <b><p>Copiright © 2020, PHP Quizz.</p></b>
    </div>

</footer>
<?php
}
?>
</html>
