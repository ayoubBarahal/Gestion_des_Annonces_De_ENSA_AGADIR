<?php


    


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="projetdev";

    $conn=mysqli_connect($servername,$username,$password,$dbname,3307);

    
    if(isset($_POST['btnlogin'])){

        $login=$_POST['login_email'];
        $password=$_POST['password_login'] ;

        if($conn->connect_error){
            echo "Failed Connection " ;
            exit(0);
        }
    
        $rqt="SELECT ID_utilisateur  FROM utilisateur WHERE Email='$login' AND Mot_de_passe='$password' ";
        $result=$conn->query($rqt);

        $user = $result->fetch_assoc(); 

        $userID = $user['ID_utilisateur'];

        
       
        
        //$_SESSION['userID'] = $userID;        


        if($result->num_rows==1){

            $rqt1="SELECT * FROM enseignant WHERE ID_utilisateur= '$userID' ";
            $result1=$conn->query($rqt1);
            
            
            if ($result1->num_rows > 0) {
                
                header("Location: profinterface.php");
                exit();
            } 

            $rqt2="SELECT * FROM chef_filière WHERE ID_utilisateur= '$userID' ";
            $result2=$conn->query($rqt2);
            
            if ($result2->num_rows > 0) {
                header("Location: cheffiliere.php");
                exit();
            } 

            
            

            $rqt4="SELECT * FROM administrateur WHERE ID_utilisateur='$userID' ";
            $result4=$conn->query($rqt4);
            
            if ($result4->num_rows > 0) {
                header("Location: admin2.php");
                exit();
            } 

            header("Location: studentinterface2.php");
                exit();
            

            


        }
        else {
            echo "Cette utilisateur n'exite pas ";
        }

    }
    

    

    

    

?>