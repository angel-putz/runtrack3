<?php
session_start();

if(isset($_SESSION['prenom'])) {
    echo "<p>Bonjour " . $_SESSION['prenom'] . "</p>";
} else {
    echo '<a href="inscription.php">Inscription</a>';
    echo '<a href="connexion.php">Connexion</a>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bonjour <?php echo $_SESSION["prenom"] ?>   </p>
</body>
</html>