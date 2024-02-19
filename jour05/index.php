<?php
session_start();
$prenom = $_SESSION['prenom'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p div = "result"> Bonjour <?php echo $prenom; ?> </p>

<a href = "inscription.php">Inscription</a>
<a href = "connexion.php">Connexion</a>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "script.js"></script>
</body>
</html>


<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    
}