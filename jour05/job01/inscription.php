<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>Inscription</h1>
    <form action="inscription.php" id="inscriptionForm" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <span id="nomError" class="error"></span>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <span id="prenomError" class="error"></span>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error"></span>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <span id="passwordError" class="error"></span>
        </div>
        <div>
            <label for="confirmPassword">Confirmez le mot de passe :</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <span id="confirmPasswordError" class="error"></span>
        </div>
        <div>
            <input type="submit" value="Inscription">
        </div>
    </form>
    <div id="message"></div>
</body>
</html>
