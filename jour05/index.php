<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["email"]) && $_SESSION["connected"] === true) {
    $prenom = $_SESSION["prenom"];
    echo "<p>Bonjour $prenom</p>";
} else {
    echo '<a href="inscription.php">Inscription</a> | <a href="connexion.php">Connexion</a>';
}
?>
</body>
</html>
