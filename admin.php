<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>admin Interface</title>
    <link rel="stylesheet" href="admin.css">
    <script>
      
          function transformerEnChampTexte() {
          var divElement = document.getElementById('content');

          var formElement = document.createElement('form');
          formElement.method = 'post'; 
          

          var inputElement = document.createElement('textarea');
          inputElement.name = 'modified_text';
          inputElement.value = divElement.innerText;

          inputElement.style.width='800px' ;
          inputElement.style.height='80px' ;
          inputElement.style.margin='30px' ;

        
          formElement.appendChild(inputElement);

          divElement.parentNode.replaceChild(formElement, divElement);

          inputElement.focus();
      }

    </script>
</head>
<body>
    <div id="container">
      
    <div  class="d-flex flex-column flex-shrink-0 p-3 "  style=" position: fixed; width: 350px;height:800px;background-color: rgb(214, 95, 95);">
    <?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "projetdev";


      $conn =mysqli_connect($servername, $username, $password, $dbname,3307);


      if ($conn->connect_error) {
          die("Connexion échouée : " . $conn->connect_error);
      }


      $user_id = 1; 
      

      $rqt = "SELECT Nom, prénom FROM utilisateur WHERE ID_utilisateur = $user_id";
      $result = $conn->query($rqt);

      if ($result->num_rows > 0) {

          $row = $result->fetch_assoc();
          $nom = $row["Nom"];
          $prénom = $row["prénom"];

          echo "<p style='font-weight: bold; color: white; font-size: larger;'> Welcome $nom $prénom </p>";
          
          
      } else {
          echo "Aucun utilisateur trouvé.";
      }

      // Fermeture de la connexion
      $conn->close();
      ?>

        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item" >
            <a href="#" id="Home" class="nav-link active" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" id="About" onclick="changecolor()" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              About
            </a>
          </li>
          <li>
            <a href="login.html" id="Logout" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Logout
            </a>
          </li>
          
        <div class="dropdown">
          <a href="#" style="margin-top: 100px;padding-top: 370px;"  class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="Mr_Robot.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Profil</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
      <link rel="stylesheet" href="profinterface.css">
    <div id="News">
        <div style="display: flex;flex-direction: row;margin: 90px 60px;">
            <div><a link="" style="color: brown;font-size:x-large;font-weight: bolder;margin-right: 50px;text-decoration: underline;">Already reveiwed</a></div>
            <div><a link="" style="color: brown;font-size: x-large;font-weight: bolder;text-decoration: underline;">News</a></div>
        </div>
        <div id="news">
        <?php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projetdev";

            
            $conn = new mysqli($servername, $username, $password, $dbname,3307);

            
            if ($conn->connect_error) {
                die("Failed Connection: " . $conn->connect_error);
            }


            $rqt = "SELECT * FROM annonce WHERE Statut='validée' OR Statut='modifiée' "; 

            $rqt2 = "SELECT utilisateur.Nom FROM utilisateur JOIN annonce ON utilisateur.ID_utilisateur = annonce.ID_utilisateur";

            $rqt3 = "SELECT utilisateur.Prénom FROM utilisateur JOIN annonce ON utilisateur.ID_utilisateur = annonce.ID_utilisateur";

            $rqt4 = "SELECT filière.Nom_filière FROM filière JOIN chef_filière ON chef_filière.ID_filière=filière.ID_filière " ;

            $rqt5 = "SELECT enseignant.Matière FROM enseignant JOIN chef_filière ON chef_filière.ID_filière=enseignant.ID_filière ";


            $result = $conn->query($rqt);
            $result2=$conn->query($rqt2);
            $result3=$conn->query($rqt3);
            $result4=$conn->query($rqt4);
            $result5=$conn->query($rqt5);

            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $row2=$result2->fetch_assoc() ;
                    $rows3=$result3->fetch_assoc() ;
                    $rows4=$result4->fetch_assoc() ;
                    $rows5=$result5->fetch_assoc() ;


                    echo '<form method="post"> ';
                    echo '<div id="news2">';
                    echo '<div style="display: flex; flex-direction: row;">';
                    echo '<div style="padding: 25px 25px;"><img src="walid_java.png" style="width: 60px; height: 60px; border-radius: 70px;"></div>';
                    echo '<div style="padding: 30px 5px;">';
                    echo $row2['Nom'].'  '.$rows3['Prénom'].'<br>'.$rows4['Nom_filière'].' - '.$rows5['Matière'];
                    echo '</div>';
                    echo '</div>';
                    echo '<div onclick="transformerEnChampTexte()" id="content" style="padding: 0px 30px;"><p>';
                    echo $row['Contenu'];
                    echo '</p></div>';
                    echo '</div>';
                    echo '<div style="display: flex;justify-content: space-between;margin-left: 50px;">' ;
                    echo '<button type="submit" name="modify" id="btnmodify" onclick="transformerEnChampTexte()">modify</button> ';
                    echo '<button name="enregistrer" id="btnconfirm">Enregistrer</button> ';
                    echo '<button name="decline" id="btndecline">Decline</button> ';
                    echo '<button name="confirm" id="btnconfirm">Confirm</button> ';
                    echo '</div>';
                    echo '</form>';

                }
            } 

            if (isset($_POST['confirm'])) {
                $newstatut = 'validée';
                $id_annonce = $row['ID_annonce']; 
        
                $rqt_confirm= "UPDATE annonce SET Statut = '$newstatut' WHERE ID_annonce = '$id_annonce'";
                
            }
            if (isset($_POST['decline'])) {
                $newstatut = 'refusée';
                $id_annonce = $row['ID_annonce']; 
        
                $rqt_decline= "UPDATE annonce SET Statut = '$newstatut' WHERE ID_annonce = '$id_annonce'";
                
            }
            if (isset($_POST['modify'])) {
                $newstatut = 'modifiée';
                $id_annonce = $row['ID_annonce']; 
        
                $rqt_modify = "UPDATE annonce SET Statut = '$newstatut'   WHERE ID_annonce = '$id_annonce'";
                
            }
            if (isset($_POST['enregistrer'])) {

              $id_annonce = $row['ID_annonce'];
              $new_text=$_POST['modified_text'];
              $rqt_enregistrer = "UPDATE annonce SET Contenu = '$new_text' WHERE ID_annonce = '$id_annonce'"; 
              $result0=$conn->query($rqt_enregistrer);   
              if ($result0) {
                echo "Le texte modifié a été enregistré avec succès.";
            } else {
                echo "Erreur lors de l'enregistrement du texte modifié : " . $conn->error;
            } 

            }

            if ($conn->query($rqt_enregistrer) === TRUE) {
              echo "Le texte modifié a été enregistré avec succès.";
            }
            else {
              echo "Erreur lors de l'enregistrement du texte modifié: " . $conn->error;
            }

            $conn->close();
        ?>


      </div>

  
      </div>
</body>
</html>