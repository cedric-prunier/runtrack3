<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <script src="validation.js"></script>
</head>
<body>
<h1>Inscription</h1>
<form id="inscriptionForm">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="password_confirm">Confirmation du mot de passe :</label>
    <input type="password" id="password_confirm" name="password_confirm" required>
    <br>
    <input type="submit" value="S'inscrire">
</form>
<script src="inscription.js"></script>
</body>
</html>
