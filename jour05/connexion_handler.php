<?php
session_start();

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
$email = $_POST['email'];
$password = $_POST['password'];

// Validate form data
$isValid = true;
$errors = array();

// Check if email is empty
if(empty($email)) {
    $isValid = false;
    $errors['email'] = 'Email is required';
}

// Check if password is empty
if(empty($password)) {
    $isValid = false;
    $errors['password'] = 'Password is required';
}

// If form data is not valid, return errors
if(!$isValid) {
    $response['status'] = 'error';
    $response['message'] = $errors;
    echo json_encode($response);
    exit();
}

// If form data is valid, check user credentials
$stmt = $mysqli->prepare("SELECT * FROM utilisateurs WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if($user && password_verify($password, $user['password'])) {
    // User credentials are valid, log the user in
    $_SESSION['prenom'] = $user['prenom'];
    var_dump($_SESSION['prenom']);
    $response['status'] = 'success';
} else {
    // User credentials are not valid
    $response['status'] = 'error';
    $response['message'] = 'Invalid email or password';
}

$stmt->close();

$mysqli->close();

echo json_encode($response);
?>