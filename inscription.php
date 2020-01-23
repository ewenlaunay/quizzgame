<?php
$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');

if (isset($_POST['envoyer'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $email2 = htmlspecialchars($_POST['email2']);
    $motdepasse = ($_POST['motdepasse']);
    $motdepasse2 = ($_POST['motdepasse2']);

    if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse2'])) {
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255) {
            if ($email == $email2) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM Joueurs WHERE email = ?");
                    $reqmail->execute(array($email));
                    $emailexist = $reqmail->rowCount();
                    if ($emailexist == 0) {
                        if ($motdepasse === $motdepasse2) {
                            $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
                            $insertmbr = $bdd->prepare("INSERT INTO Joueurs(pseudo, email, motdepasse) VALUES (?, ?, ?)");
                            $insertmbr->execute(array($pseudo, $email, $motdepasse));
                            $erreur = "Votre compte a bien été créé !";
                        } else {
                            $erreur = "Vos mot de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail dejà utilisé !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspond pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "erreur !";
    }
}


session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<header>
    <div class="logo d-flex justify-content-center">
        <img src="img/quizz.png" alt="logo">
    </div>
</header>
<body>

<h1 class="d-flex justify-content-center">Inscription</h1>
<br>
<div class="d-flex justify-content-center">
    <form action="" name="formulaire" method="post">
        <label>Pseudo:
            <input type="text" name="pseudo" class="form-control" value="<?php if (isset($pseudo)) {
                echo $pseudo;
            } ?>">
        </label>
        <br>
        <label>Email
            <input type="email" name="email" class="form-control" value="<?php if (isset($email)) {
                echo $email;
            } ?>">
        </label>
        <br>
        <label>Confirmer email
            <input type="email" name="email2" class="form-control" value="<?php if (isset($email2)) {
                echo $email2;
            } ?>">
        </label>
        <br>
        <label>Mot de passe:
            <input type="password" name="motdepasse" class="form-control">
        </label>
        <br>
        <label>Confirmer mot de passe:
            <input type="password" name="motdepasse2" class="form-control">
        </label>
        <br>
        <div class="error d-flex justify-content-center">
            <?php
            if (isset($erreur)) {
                echo '<span style="color: red; ">' . $erreur . "</span>";
            }
            ?>
        </div>
        <input class="btn btn-danger d-flex justify-content-center" type="submit" name="envoyer" value="Connexion">
    </form>
</div>
</body>
</html>