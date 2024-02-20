<!--
<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   
    <header class="bg-slate-950">
        <nav>
            <ul>
            <div class="h-30 grid grid-cols-3 gap-4 content-start ...">
                <div><li><a href="index.php" class="text-amber-300">Accueil</a></li></div>
                <div><li><a href="index.php" class="text-amber-300">Inscription</a></li></div>
                <div><li><a href="index.php" class="text-amber-300">Connexion</a></li></div>
                <div><li><a href="index.php" class="text-amber-300">Rechercher</a></li></div>
                </div>
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

            
            <input type="submit" value="Submit" class="bg-blue-950">
            
        </form>
    </section>

    <footer class="bg-red-950">
        <ul>
        <div class="h-30 grid grid-cols-3 gap-4 content-start ...">
            <div><li><a href="index.php" class="text-lime-400">Accueil</a></li></div>
            <div><li><a href="index.php" class="text-lime-400">Inscription</a></li></div>
            <div><li><a href="index.php" class="text-lime-400">Connexion</a></li></div>
            <div><li><a href="index.php" class="text-lime-400">Rechercher</a></li></div>
            </div>
        </ul>
    </footer>
</body>
</html>
-->

<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-600">
    <header class="p-6 bg-blue-500 text-white">
        <nav>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:underline text-amber-300">Accueil</a></li>
                <li><a href="index.php" class="hover:underline text-amber-300">Inscription</a></li>
                <li><a href="index.php" class="hover:underline text-amber-300">Connexion</a></li>
                <li><a href="index.php" class="hover:underline text-amber-300">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section class="p-6 bg-white shadow-md rounded-md max-w-md mx-auto mt-8">
        <form action="index.php" method="post" class="space-y-4">
            <div>
                <label for="civilite" class="block mb-2">Civilité:</label>
                <div class="flex space-x-4">
                    <div>
                        <input type="radio" id="monsieur" name="civilite" value="monsieur" class="form-radio">
                        <label for="monsieur">Monsieur</label>
                    </div>
                    <div>
                        <input type="radio" id="madame" name="civilite" value="madame" class="form-radio">
                        <label for="madame">Madame</label> <br>

            <div class="space-y-4">
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
            </div>
                    </div>
                </div>
            </div>

            <!-- Repeat the pattern above for other fields -->

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </section>

    <footer class="p-6 bg-blue-500 text-white mt-8">
        <ul class="flex space-x-4">
            <li><a href="index.php" class="hover:underline text-lime-400">Accueil</a></li>
            <li><a href="index.php" class="hover:underline text-lime-400">Inscription</a></li>
            <li><a href="index.php" class="hover:underline text-lime-400">Connexion</a></li>
            <li><a href="index.php" class="hover:underline text-lime-400">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>