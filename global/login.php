<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&family=Yusei+Magic&display=swap" rel="stylesheet">
<?php if(isset($_SESSION['id'])) { echo "<title>Le Hugotidien/Le Robineur</title>";}
      else { echo "<title>Papers</title>";} ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../static/rbn.css">
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
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <?php if(isset($_SESSION['id'])) { echo "<a class='navbar-brand' href='#'>Le Robineur/Le Hugotidien</a>";}
      else { echo "<a class='navbar-brand' href='#'>Papers</a>";} ?>  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Accueil</a></li>
        <li class="active"><a href="#">Connexion</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" disabled placeholder="Rechercher..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
      </div>
      <div class="well">
        <p><a href="#"></a></p>
        <p>
        </p>
      </div>
    </div>
    <div class="col-sm-7">
        <div class="card">
          <form action="loginDB.php">
            <div class="form-group">
              <h2>Merci d'entrer votre nom et prénom complet au format <em>prénom.nom</em> <mark>Ex : <em>balthazar.picsou</em></mark></h2>
            </div>
            <div class="well">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Prénom et Nom" name="name" id="name">
                  <br>
                  <input type="text" class="form-control" placeholder="Numéro d'abonnement" name="id" id="id">
                </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-primary lg btn-block"></input>
              </div>
            </div>
          </form>
        </div>
    </div>
    <div class="col-sm-2 well">     
    </div>
  </div>
</div>

<footer class="container-fluid text-center ">

</footer>

</body>
</html>
