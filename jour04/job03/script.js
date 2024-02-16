/*
document.getElementById('filtrer').addEventListener('click', function() {
    let id = document.getElementById('id').value;
    let nom = document.getElementById('nom').value;
    let type = document.getElementById('type').value;

    fetch('pokemon.json')
        .then(response => response.json())
        .then(pokemons => {
            let pokemonID = pokemons.find(pokemon => pokemon.id == id);
            let pokemonNom = pokemons.find(pokemon => pokemon.nom == nom);
            let pokemonType = pokemons.find(pokemon => pokemon.type == type);
            if (pokemonID || pokemonNom || pokemonType) {
                let pokemon = pokemonID || pokemonNom || pokemonType;
                document.getElementById('resultat').innerHTML = `ID: ${pokemon.id} <br> Nom: ${pokemon.nom} <br> Type: ${pokemon.type}`;
            } else {
                document.getElementById('resultat').innerHTML = `Aucun pokémon trouvé`;
            }
        });
});
*/


function filterPokemon() {
    // Récupérer les critères de filtrage depuis le formulaire
    var id = document.getElementById('id').value.toLowerCase();
    var name = document.getElementById('name').value.toLowerCase();
    var type = document.getElementById('type').value.toLowerCase();
    
    // Récupérer les données des Pokémon depuis le fichier JSON
    fetch('pokemon.json')
    .then(response => response.json())
    .then(data => {
        // Filtrer les Pokémon selon les critères
        var filteredPokemon = data.filter(pokemon => {
            return pokemon.id.toString().toLowerCase().includes(id) &&
                   pokemon.name.english.toLowerCase().includes(name) &&
                   pokemon.type.map(t => t.toLowerCase()).includes(type);
        });

        // Afficher les Pokémon filtrés
        displayPokemon(filteredPokemon);
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
}

function displayPokemon(pokemonList) {
    // Sélectionner l'élément où afficher les Pokémon
    var pokemonContainer = document.getElementById('pokemon-container');
    // Effacer le contenu précédent
    pokemonContainer.innerHTML = '';

    // Parcourir la liste des Pokémon filtrés
    pokemonList.forEach(pokemon => {
        // Créer un élément de liste pour chaque Pokémon
        var listItem = document.createElement('li');
        // Ajouter le nom et le type du Pokémon à l'élément de liste
        listItem.textContent = pokemon.name.english + ' - Type: ' + pokemon.type.join(', ');
        // Ajouter l'élément de liste au conteneur
        pokemonContainer.appendChild(listItem);
    });
}


