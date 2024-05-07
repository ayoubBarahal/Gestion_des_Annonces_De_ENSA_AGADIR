
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Student Interface</title>
    <link rel="stylesheet" href="studentinterface.css">
</head>
<body>
    <div id="container">
    <div  class="d-flex flex-column flex-shrink-0 p-3 "  style="position: fixed;  width: 350px;height:850px;background-color: rgb(214, 95, 95);">
        <a  href="/"  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Hello, <?php echo "Student "; ?></span>
        </a>
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
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
      <link rel="stylesheet" href="studentinterface.css">
      <div id="News">
        <div id="events">
            <div id="title">
                <p>News & Events</p>
            </div>
            <div id="event1">
                <div id="e1" style="background-color: brown;color: white;border-radius:10px;width: 70px;height: 70px;font-weight: bolder;border: 2px black solid;margin:5px 2px;padding-left: 20px;"><p><span style="padding-left: 5px;">21</span><br>Avril</p></div>
                <div style="padding: 10px 10px;"><p><span style="font-weight: bolder;font-size: large;">java seance has been reporte</span><br>Genie informatique - java</p></div>
            </div>
            <div id="event1">
                <div id="e1" style="background-color: brown;color: white;border-radius:10px;width: 70px;height: 70px;font-weight: bolder;border: 2px black solid;margin:5px 2px;padding-left: 20px;"><p><span style="padding-left: 5px;">21</span><br>Avril</p></div>
                <div style="padding: 10px 10px;"><p><span style="font-weight: bolder;font-size: large;">java seance has been reporte</span><br>Genie informatique - java</p></div>
            </div>
            <div id="event1">
                <div id="e1" style="background-color: brown;color: white;border-radius:10px;width: 70px;height: 70px;font-weight: bolder;border: 2px black solid;margin:5px 2px;padding-left: 20px;"><p><span style="padding-left: 5px;">21</span><br>Avril</p></div>
                <div style="padding: 10px 10px;"><p><span style="font-weight: bolder;font-size: large;">java seance has been reporte</span><br>Genie informatique - java</p></div>
            </div>
            <div id="event1">
                <div id="e1" style="background-color: brown;color: white;border-radius:10px;width: 70px;height: 70px;font-weight: bolder;border: 2px black solid;margin:5px 2px;padding-left: 20px;"><p><span style="padding-left: 5px;">21</span><br>Avril</p></div>
                <div style="padding: 10px 10px;"><p><span style="font-weight: bolder;font-size: large;">java seance has been reporte</span><br>Genie informatique - java</p></div>
            </div>
            <div id="event1">
                <div id="e1" style="background-color: brown;color: white;border-radius:10px;width: 70px;height: 70px;font-weight: bolder;border: 2px black solid;margin:5px 2px;padding-left: 20px;"><p><span style="padding-left: 5px;">21</span><br>Avril</p></div>
                <div style="padding: 10px 10px;"><p><span style="font-weight: bolder;font-size: large;">java seance has been reporte</span><br>Genie informatique - java</p></div>
            </div>
        </div>
       
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
          <a href="#" style="margin-top: 100px;padding-top: 370px;" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
    <form action="ajouterannonce.php" method="post">
    <div id="News">
        <div id="events">
            <div id="annoncetitle">
                <p style="font-size :large;padding-left: 50px;font-weight: bold;color: brown;">Add Annonce Type </p>
                <textarea name="annoncetitle" id="titlearea" placeholder="add your annonce title rigth here" style="color: white;padding: 10px;"></textarea>
            </div>
            <div id="Annonce">
                <textarea name="annonce" id="annoncearea" placeholder="write your annonce here"></textarea>
                <div id="btnannonce" style="display: flex;flex-direction: row;margin: 10px ;">
                    <button name="send" id="btnsend" onclick="enregistrer()">send</button>
                    <button id="btncancel">cancel</button>
                </div>
            </div>
        </div>
      </form>
      <div id="news">
      <?php 



            include("login.php");

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projetdev";

            
            $conn = new mysqli($servername, $username, $password, $dbname,3307);

            
            if ($conn->connect_error) {
                die("Failed Connection: " . $conn->connect_error);
            }

            
            $userID=1;

            $rqt = "SELECT annonce.*, utilisateur.Nom, utilisateur.Prénom, enseignant.Matière 
                    FROM annonce 
                    JOIN utilisateur ON annonce.ID_utilisateur = utilisateur.ID_utilisateur 
                    JOIN enseignant ON utilisateur.ID_utilisateur = enseignant.ID_utilisateur 
                    WHERE annonce.ID_utilisateur = '$userID'";

            $result = $conn->query($rqt);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo '<div id="news">' ;
                    echo '<form method="post"> ';
                    echo '<div id="news1" style="margin-top: 50px;">';
                    echo '<div style="display: flex; flex-direction: row;">';
                    echo '<div style="padding: 25px 25px;"><img src="walid_java.png" style="width: 60px; height: 60px; border-radius: 70px;"></div>';
                    echo '<div style="padding: 30px 5px;">';
                    echo $row['Nom'].'  '.$row['Prénom'].'- '.$row['Matière'];
                    echo '</div>';
                    echo '</div>';
                    echo '<div style="padding: 0px 30px;"><p>';
                    echo $row['Contenu'];
                    echo '</p></div>';
                    echo '</div>';
                    echo '</form>';
                    echo '</div>' ;

                }
            } 

            ?>
        </div>


      </div>





      </div>
</body>
</html>