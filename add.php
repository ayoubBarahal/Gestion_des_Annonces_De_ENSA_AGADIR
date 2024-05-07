<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projetdev";


$conn = new mysqli($servername, $username, $password, $database,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$type_utilisateur = $_POST['type_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];

// Inserting data into database
$sql = "INSERT INTO utilisateur (Nom, Prénom,  Email,Type, Mot_de_passe) VALUES ('$nom', '$prenom',  '$email', '$type_utilisateur', '$mot_de_passe')";
$query=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
