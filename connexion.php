<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');


if (isset($_GET['envoyer'])) {


    $mailconnect = htmlspecialchars($_GET['mailconnect']);
    $motdepasse = password_hash($_GET['motdepasse'], PASSWORD_DEFAULT);

    if (!empty($mailconnect) AND !empty($motdepasse)) {
        $requser = $bdd->prepare('SELECT * FROM Joueurs WHERE email = ?  ');
        $requser->execute(array($mailconnect));
        $userexist = $requser->rowCount();
        $userinfo = $requser->fetch();

        if ($userexist == 1) {
            if (password_verify($_GET['motdepasse'], $userinfo["motdepasse"])) {


                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['pseudo'] = $userinfo['pseudo'];
                $_SESSION['email'] = $userinfo['email'];
                header("Location: profil.php?id=" . $_SESSION['id']);

            } else {
                $erreur = "Mauvais mot de passe";
            }
        } else {
            $erreur = "Mauvais mail";
        }

    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<header>
    <div class="logo d-flex justify-content-center">
        <img src="img/quizz.png" alt="logo">
    </div>
</header>
<br>
<body>

<div class="d-flex justify-content-center">
    <form action="" name="formulaire" method="get">
        <label>Email:
            <input type="text" name="mailconnect" class="form-control" placeholder="Mail">
        </label>
        <br>
        <label>Mot de passe:
            <input type="password" name="motdepasse" class="form-control" placeholder="Mot de passe">
        </label>
        <br>
        <a href="inscription.php">Inscription</a>
        <br>
        <input class="btn btn-danger d-flex justify-content-center" type="submit" name="envoyer" value="Connexion">
    </form>
</div>
<?php
if (isset($erreur)) {
    echo '<span style="color: red; ">' . $erreur . "</span>";
}
?>
</body>
<footer>
    <a href="html2.php">html</a>
    <a href="php2.php">php</a>
    <a href="mysql2.php">mysql</a>
</footer>
</html>
