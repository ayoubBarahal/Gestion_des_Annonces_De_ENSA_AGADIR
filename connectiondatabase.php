<?php
    /*
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="projet web";
    $conn=mysqli_connect($servername,$username,$password,$db_name,3307);
    echo "the page is succefly connected ";
    if(isset($_POST['but1'])){
        $id="D139218877";
        $name= $_POST['namefield'];
        $prenom="ayoub";
        $email = $_POST['emailfield'];
        $password =$_POST['passwordfield'];
        $type="Etudiant";
        
        
        $sql =" INSERT INTO utilisateur  VALUES ('$id',$name','$prenom','$email','$password','$type')";
        $query=mysqli_query($conn,$sql);
        
    if ($query) {
            echo "L'utilisateur a été ajouté avec succès.";
    } else {
            echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
        }
    }

    if(isset($_POST['btnlogin'])){
        $Email=$_POST['login_email'];
        $Password=$_POST['password_login'] ;
        
        $sql = "SELECT * FROM utilisateurs WHERE login = '$login' AND password = '$password'";
        $result = $conn->query($sql);

    
        if ($result->num_rows == 1) {

            header("Location: home.html"); 
            exit(); 
        } else {
        // Login ou mot de passe invalides
        echo "Identifiants invalides.";
        }

    }*/
?>