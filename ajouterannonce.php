<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetdev";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    $annonce = $_POST['annonce'];
    $type = $_POST['annoncetitle'];

    $rqt = "INSERT INTO annonce (ID_annonce,ID_utilisateur, Type_utilisateur, Type_annonce, Contenu, Statut) VALUES (?,?, 'enseignant', ?, ?, 'en attente')";

    $stmt = $conn->prepare($rqt);

    if ($stmt) {

        //je doit mettre ID_annonce Auto_Incrément .
        $id_utilisateur =1;
        //on doit changer id_annonce ou bien le mettre AUTO_INCREMENT 
        $id_annonce = 21 ;
        
        
        
        $stmt->bind_param("iiss",$id_annonce, $id_utilisateur, $type, $annonce);

        if ($stmt->execute()) {
            header('Location: profinterface.php');
            exit;
        } else {
            echo "Erreur lors de l'insertion de l'annonce : " . $stmt->error;
        }
    } else {
        echo "Erreur de préparation de la requête : " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
