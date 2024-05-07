<?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="webdev";
    $conn=mysqli_connect($servername,$username,$password,$db_name,3307);

    

    if(isset($_POST['btnsignup'])){

        if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }
        
        
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmepassword'] ;

        if($password==$confirmpassword){
        
        $sql =" INSERT INTO etudiant  VALUES ('$email','$name','$password')";
        $query=mysqli_query($conn,$sql);
        
            if ($query) {
                header("Location: login.html");
                exit();}
            else{
            echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
            }
        } 
        else{
            echo "Erreur de Confirmation ";
        }  
    }

?>