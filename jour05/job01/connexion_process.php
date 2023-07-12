<?php
session_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "utilisateurs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Récupération des données de l'utilisateur depuis la base de données
$sql = "SELECT id, prenom, password FROM utilisateurs WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Authentification réussie
        $_SESSION['prenom'] = $row['prenom'];
        $response = array(
            'success' => true,
            'message' => 'Connexion réussie.'
        );
    } else {
        // Mot de passe incorrect
        $response = array(
            'success' => false,
            'message' => 'Mot de passe incorrect.'
        );
    }
} else {
    // Utilisateur non trouvé
    $response = array(
        'success' => false,
        'message' => 'Aucun utilisateur trouvé avec cet email.'
    );
}

// Fermeture de la connexion à la base de données
$conn->close();

// Conversion du tableau en format JSON
$jsonData = json_encode($response);

// Envoi de l'en-tête pour spécifier le type de contenu JSON
header('Content-Type: application/json');

// Affichage du contenu JSON
echo $jsonData;
?>
