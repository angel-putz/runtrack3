<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
<form>
    <label for="id">ID:</label><br>
    <input type="text" id="id" name="id"><br>
    
    
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom"><br>


    <label for="type">Type:</label><br>
    <select id="type" name="type">
        <option value="">--Choisi un type--</option>
        <option value="type1">Fighting</option>
        <option value="type2">Dragon</option>
        <option value="type3">Water</option>
        <option value="type4">Electric</option>
        <option value="type5">Fire</option>
        <option value="type6">Ice</option>
        <option value="type7">Bug</option>
        <option value="type8">Normal</option>
        <option value="type9">Grass</option>
        <option value="type10">Poison</option>
        <option value="type11">Psychic</option>
        <option value="type12">Rock</option>
        <option value="type13">Ground</option>
        <option value="type14">Ghost</option>
        <option value="type15">Flying</option>
    </select><br>

    
    <input type="button" value="Filtrer" id="filtrer">

</form>

<p id="resultat"></p>
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri des Pokémon</title>
</head>
<body>
    <h1>Tri des Pokémon</h1>
    <form id="filterForm">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br><br>

        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="type">Type:</label>
        <select id="type" name="type">
        <option value="">--Choisi un type--</option>
        <option value="Fighting">Fighting</option>
        <option value="Dragon">Dragon</option>
        <option value="Water">Water</option>
        <option value="Electric">Electric</option>
        <option value="Fire">Fire</option>
        <option value="Ice">Ice</option>
        <option value="Bug">Bug</option>
        <option value="Normal">Normal</option>
        <option value="Grass">Grass</option>
        <option value="Poison">Poison</option>
        <option value="Psychic">Psychic</option>
        <option value="Rock">Rock</option>
        <option value="Ground">Ground</option>
        <option value="Ghost">Ghost</option>
        <option value="Flying">Flying</option>

        </select><br><br>

        <input type="button" value="Filtrer" onclick="filterPokemon()">
    </form>

    <div id="results"></div>

    <ul id="pokemon-container"></ul>


    <script src="script.js"></script>
</body>
</html>


<script src="script.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>