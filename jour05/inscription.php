<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="inscription.js"></script>
</head>
<body>
    <form id="inscriptionForm">
        <input type="text" id="nom" name="nom" placeholder="Nom">
        <span id="nomError"></span>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom">
        <span id="prenomError"></span>
        <input type="text" id="email" name="email" placeholder="Email">
        <span id="emailError"></span>
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <span id="passwordError"></span>
        <input type="password" id="passwordConfirmation" name="passwordConfirmation" placeholder="Confirmation du mot de passe">
        <span id="passwordConfirmationError"></span>

        <input type="submit" value="Inscription">
    </form>
    <a href="connexion.php">Connexion</a>

    <script src="inscription.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>