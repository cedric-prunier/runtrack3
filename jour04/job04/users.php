<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "utilisateurs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupération des utilisateurs depuis la base de données
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

// Création d'un tableau associatif pour stocker les utilisateurs
$users = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Conversion du tableau en format JSON
$jsonData = json_encode($users);

// Envoi de l'en-tête pour spécifier le type de contenu JSON
header('Content-Type: application/json');

// Affichage du contenu JSON
echo $jsonData;
?>
