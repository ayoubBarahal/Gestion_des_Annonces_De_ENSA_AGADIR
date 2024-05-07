<?php

    //include ('./admin.php')


        $servername="localhost";
        $username="root";
        $password="";
        $dbname="withoumaima";

        $conn=mysqli_connect($servername,$username,$password,$dbname,3307);

        if(isset($_POST['btnlogin'])){

            $login=$_POST['login_email'];
            $password=$_POST['password_login'] ;


        
            $rqt="SELECT ID_utilisateur  FROM utilisateur WHERE Email='$login' AND Mot_de_passe='$password' ";
            $result=$conn->query($rqt);

            $user = $result->fetch_assoc(); 

            $userID = $user['ID_utilisateur'];
        }







?>