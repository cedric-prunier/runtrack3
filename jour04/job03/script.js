function filterPokemons() {
        const id = document.getElementById("id").value;
        const name = document.getElementById("name").value;
        const type = document.getElementById("type").value;

        fetch("pokemon.json")
                .then((response) => response.json())
                .then((data) => {
                        const filteredPokemons = data.filter((pokemon) => {
                                const pokemonName = pokemon.name.french.toLowerCase();
                                return (!id || pokemon.id.toString().includes(id)) && (!name || pokemonName.includes(name.toLowerCase())) && (!type || pokemon.type.includes(type));
                        });

                        displayResults(filteredPokemons);
                })
                .catch((error) => console.log(error));
}

function displayResults(pokemons) {
        const resultsDiv = document.getElementById("results");
        resultsDiv.innerHTML = "";

        if (pokemons.length === 0) {
                resultsDiv.textContent = "Aucun Pokémon ne correspond aux critères de filtrage.";
                return;
        }

        const ul = document.createElement("ul");

        pokemons.forEach((pokemon) => {
                const li = document.createElement("li");
                const name = pokemon.name.french;
                li.textContent = `#${pokemon.id} - ${name} (${pokemon.type.join(", ")})`;
                ul.appendChild(li);
        });

        resultsDiv.appendChild(ul);
}
