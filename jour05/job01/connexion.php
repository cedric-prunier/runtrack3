<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

    <h1>Connexion</h1>
    <form action="connexion.php" id="connexionForm" method="POST">
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
            <input type="submit" value="Connexion">
        </div>
    </form>
    <div id="message"></div>
</body>
</html>
