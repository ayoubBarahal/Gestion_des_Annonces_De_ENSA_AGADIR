<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projetdev";


$conn = new mysqli($servername, $username, $password, $database, 3307);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération de l'email depuis le formulaire
$email = $_POST['email'];

// Requête préparée pour supprimer l'utilisateur en fonction de l'email
$sql = "DELETE FROM utilisateur WHERE Email = ?";


$stmt = $conn->prepare($sql);

// Vérification de la préparation de la requête
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Liaison des paramètres et exécution de la requête
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . $stmt->error;
}

// Fermeture de la connexion et du statement
$stmt->close();
$conn->close();


?>
