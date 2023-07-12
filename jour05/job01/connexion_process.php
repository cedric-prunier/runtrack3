<?php
session_start();

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Vérifier les validations habituelles du formulaire
    // ...

    // Vérifier les informations d'identification dans la base de données
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "utilisateurs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion à la base de données
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Vérifier les informations d'identification dans la table utilisateurs
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Informations d'identification valides, établir une session utilisateur
        $user = $result->fetch_assoc();

        // Stocker les informations de l'utilisateur dans la session
        $_SESSION['id'] = $user['id'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['connected'] = true;

        // Redirection vers la page d'accueil
        header('Location: index.php');
        exit();
    } else {
        // Informations d'identification invalides
        echo "Identifiants invalides.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
