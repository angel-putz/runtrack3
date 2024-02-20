<?php
session_start();



try {
    // Votre code de traitement de l'inscription ici

    // Si tout se passe bien, renvoyez une réponse JSON de succès
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success']);
} catch (Exception $e) {
    // Si une exception est levée, renvoyez une réponse JSON d'erreur
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    exit();
}


// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'utilisateurs');

$response = array();

// Check connection
if ($mysqli->connect_error) {
    $response['status'] = 'error';
    $response['message'] = "Connection failed: " . $mysqli->connect_error;
    echo json_encode($response);
    exit();
}

// Get form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['passwordConfirmation'];

// Validate form data
$isValid = true;
$errors = array();

// Check if nom is empty
if(empty($nom)) {
    $isValid = false;
    $errors['nom'] = 'Nom is required';
}

if(empty($prenom)) {
    $isValid = false;
    $errors['prenom'] = 'Prénom is required';
}

// Check if email is empty
if(empty($email)) {
    $isValid = false;
    $errors['email'] = 'Email is required';
}

// Check if email is valid
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $errors['email'] = 'Email is invalid';
}

// Check if password is empty
if(empty($password)) {
    $isValid = false;
    $errors['password'] = 'Password is required';
}

// Check if password and passwordConfirmation are the same
if($password !== $passwordConfirmation) {
    $isValid = false;
    $errors['passwordConfirmation'] = 'Password and confirmation do not match';
}

// If form data is not valid, return errors
if(!$isValid) {
    $response['status'] = 'error';
    $response['message'] = $errors;
    echo json_encode($response);
    exit();
}



// If form data is valid, create user in the database


// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement
$stmt = $mysqli->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nom, $prenom, $email, $hashedPassword);

// Execute SQL statement
if($stmt->execute()) {
    $response['status'] = 'success';
} else {
    $response['status'] = 'error';
    $response['message'] = 'There was an error creating the user';
}

$stmt->close();

$mysqli->close();

echo json_encode($response);

header('Location: index.php')
?>