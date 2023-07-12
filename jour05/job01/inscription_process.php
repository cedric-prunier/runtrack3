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

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

// Vérification de l'existence de l'email dans la base de données
// Insertion des données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array(
        'success' => false,
        'message' => 'Cet email est déjà utilisé. Veuillez en choisir un autre.'
    );
} else {
    // Insertion des données dans la base de données
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $response = array(
            'success' => true,
            'message' => 'Inscription réussie. Veuillez vous connecter.'
        );

    // Redirection vers la page de connexion
    $response['redirect'] = 'connexion.php';
    } else {
        $response = array(
            'success' => false,
            'message' => 'Une erreur s\'est produite lors de l\'inscription. Veuillez réessayer.'
        );
    }
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
