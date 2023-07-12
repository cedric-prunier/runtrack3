<!DOCTYPE html>
<html>
<head>
    <title>Filtrage de données Pokémon</title>
</head>
<body>
    <h1>Filtrage de données Pokémon</h1>

    <form id="filterForm">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br>

        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br>

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">Tous les types</option>
            <option value="Grass">Plante</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Feu</option>
            <option value="Water">Eau</option>
            <option value="Flying">Volant</option>
            <!-- Ajoutez d'autres options de type ici -->
        </select><br>

        <input type="button" value="Filtrer" onclick="filterPokemons()">
    </form>

    <div id="results"></div>

 
</body>
<script src="script.js"></script>
</html>
