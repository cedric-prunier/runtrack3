<?php
session_start();

if (isset($_POST['logout'])) {
    // Destruction de toutes les variables de session
    $_SESSION = array();

    // Destruction de la session
    session_destroy();

    // Redirection vers la page de connexion
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
   
</head>

<body>
    <div>
        <h1>Déconnexion</h1>
        <p>Êtes-vous sûr de vouloir fermer votre session ?</p>
        <form action="deconnexion.php" method="post">
            <input type="submit" name="logout" value="Déconnexion">
            <button type="button" onclick="window.history.back();">Annuler</button>
        </form>
    </div>
</body>

</html>