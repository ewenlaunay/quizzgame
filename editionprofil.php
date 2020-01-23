<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=quizzgame;charset=utf8', 'root', 'root');

if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM Joueurs  WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if (isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE Joueurs SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header("Location: profil.php?id".$_SESSION['id']);
    }


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
    <div align="center">
        <h2>Edition de mon profil</h2>
        <form method="post" action="">
            <label>Pseudo: </label>
            <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>">
            <br>
            <label>Mail: </label>
            <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['email']; ?>">
            <br>
            <label>Mot de passe: </label>
            <input type="password" name="newmdp1" placeholder="Mot de passe">
            <br>
            <label>Confirmer mot de passe: </label>
            <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe">
            <br>
            <input type="submit" value="Mettre à jour">

        </form>

    </div>
    </body>
    <footer>

    </footer>
    </html>
    <?php
} else {
    header("Location: connexion.php");
}
?>