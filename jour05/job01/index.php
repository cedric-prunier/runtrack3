<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <?php
    session_start();

    // Vérification de la connexion de l'utilisateur
    if (isset($_SESSION['prenom'])) {
        $prenom = $_SESSION['prenom'];
        echo "<p>Bonjour $prenom</p>";
        echo "<a href='déconnexion.php'>Déconnexion</a>";
    } else {
        echo "<a href='inscription.php'>Inscription</a>";
        echo "<a href='connexion.php'>Connexion</a>";
    }
    ?>
</body>
</html>
