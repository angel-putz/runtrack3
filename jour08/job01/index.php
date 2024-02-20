<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <form action="index.php" method="post">
            <label for="civilite">Civilité:</label><br>
            <input type="radio" id="monsieur" name="civilite" value="monsieur">
            <label for="monsieur">Monsieur</label><br>
            <input type="radio" id="madame" name="civilite" value="madame">
            <label for="madame">Madame</label><br>

            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom"><br>

            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom"><br>

            <label for="adresse">Adresse:</label><br>
            <input type="text" id="adresse" name="adresse"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="confirm_password">Confirmez le Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password"><br>

            <label for="passions">Choisissez vos passions:</label><br>
            <input type="checkbox" id="informatique" name="passions[]" value="informatique">
            <label for="informatique">Informatique</label><br>
            <input type="checkbox" id="voyages" name="passions[]" value="voyages">
            <label for="voyages">Voyages</label><br>
            <input type="checkbox" id="sport" name="passions[]" value="sport">
            <label for="sport">Sport</label><br>
            <input type="checkbox" id="lecture" name="passions[]" value="lecture">
            <label for="lecture">Lecture</label><br>

            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>