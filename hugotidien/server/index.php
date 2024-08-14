<?php 
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <?php header('Content-Type: text/html; charset=UTF-8'); ?>
  <title>Le Hugotidien</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../static/htn.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>

<?php 
include "../../vars.php";

// Create connection
$conn = new mysqli($servername, $username, $password, 'papers');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Le Hugotidien</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li class=""><a href="newArt.php">Nouvel Article</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Rechercher..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../robineur/server/index.php"><span class="glyphicon glyphicon-arrow-right"></span> Le Robineur</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Mon abonnement</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <?php if(isset($_SESSION['id'])) {echo $_SESSION['fName'] . "  " . $_SESSION['lName'];} ?>
      </div>
      <div class="well">
        <p><a href="#">Catégories</a></p>
        <p>
          <?php //LIENS VERS CATEGORIES SOUS LA FORME <span class="label label-default">News</span>?>
        </p>
      </div>
    </div>
    <div class="col-sm-7">
        <div class="row">
        <div class="col-sm-12">
        <div class="panel panel-default text-left">
            <div class="panel-body">
                <p> Articles Récents </p>
            </div>
        </div>
        </div>
    </div>
      <?php
        if(isset($_SESSION['id'])){
          $sql = "SELECT * FROM `articles` WHERE `paperId`='htd' ORDER BY `date` DESC";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $head = substr($row['content'], 0, 100);
              echo "<div class='row'>
                  <div class='col-sm-3'>
                      <div class='well'>
                          <p>{$row['title']}</p>
                          <img src='"; if($row['img'] == '') {echo "../images/logo.png";} else {echo "../artImages/{$row['img']}";} echo "' class='img-rectangle' height='55' width='75' alt=''>
                      </div>
                  </div>
                  <div class='col-sm-9'>
                      <div class='well'>
                          <h4><a href='article.php?n={$row['unicid']}'>{$row['title']}</a></h4>
                          <p>{$head}...</p>
                          <p>{$row['author']}"; if($row['author']== "") {echo "<br>";} echo "</p>
                          <p>{$row['date']}</p>
                      </div>
                  </div>
              </div>";
              }
          }
        }
        else {
          echo "<h2>Merci de vous connecter pour voir les articles</h2><br><a href='../../global/login.php'>Se connecter</a>";
        }
      
       ?>
    </div>
    <div class="col-sm-2 well">     
      <p>Liens Partenaires </p>
          <br> 
          <?php 
          if(isset($_SESSION['id'])){
            $sql = "SELECT * FROM `ads` WHERE paperId='htd'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row['paperId'] == 'rbn') {$pid = 'robineur';} else if($row['paperId'] == 'htd') {$pid = 'hugotidien';}
                    echo "<a href='../artImages/{$row['img']}'><div class='well row'>
                            <img src='../artImages/{$row['img']}' class='row' width='180'>
                            <p>{$row['legend']}</p>
                            <p>{$row['company']}</p>
                          </div></a>";
                    }
                }
              }?>
    </div>
  </div>
</div>

<footer class="container-fluid text-center ">
  <p>&copy Le Hugotidien <?php echo date("Y"); ?></p>
</footer>
<?php $conn->close(); ?>
</body>
</html>
