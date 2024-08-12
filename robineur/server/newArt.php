<!DOCTYPE html>
<html lang="en">
<head>
  <title>Le Robineur</title>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../static/rbn.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../static/main.js"></script>
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
      <a class="navbar-brand" href="index.php">Le Robineur</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Accueil</a></li>
        <li class="active"><a href="newArt.php">Nouvel Article</a></li>
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
        <li><a href="../../hugotidien/server/index.php"><span class="glyphicon glyphicon-arrow-right"></span> Le Hugotidien</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Mon abonnement</a></li>
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
        <p><a href="#">Catégories</a></p>
        <p>
        </p>
      </div>
    </div>
    <div class="col-sm-7">
      <h2>Créer un nouvel article</h2>
      <br>
      <form id="uploadForm" enctype="multipart/form-data">
            Sélectionnez une image :
            <input type="file" name="img" id="imgInput">
            <button type="button" onclick="uploadImage()">Uploader</button>
            <div id="result"></div>
      </form>
      <br>
      <br>  
      <form action="createArt.php">
        <div class="form-group">
          <input type="hidden" name="hidName" id="hidName">
          <input type="text" name="title" id="title" placeholder="Titre" required class="form-control">
        </div>
        <div class="form-group">
          <div class="well">
            <div class="button linkBtn">
              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#link">Ajouter un lien</button>
              <div class="modal fade" id="link" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Ajouter un lien</h4>
                    </div>
                    <div class="modal-body">
                      <input type="text" id="name" class="form-control" placeholder="Texte affiché">
                      <input type="text" id="link" class="form-control" placeholder="URL">
                      <button type="button" class="btn btn-info btn-xs">Lien</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="button imgBtn">
              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#link">Ajouter un lien</button>
              <div class="modal fade" id="link" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Ajouter un lien</h4>
                    </div>
                    <div class="modal-body">
                      <input type="text" id="name" class="form-control" placeholder="Texte affiché">
                      <input type="text" id="link" class="form-control" placeholder="URL">
                      <button type="button" class="btn btn-info btn-xs">Lien</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <textarea id="content" name="content" rows="18" cols="86"></textarea>
          <label for="author">Votre nom</label>
          <input class="form-control" type="text" id="author" name="author"></input>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
    <div class="col-sm-2 well">     
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy Le Robineur <?php echo date("Y"); ?></p>
</footer>

</body>
</html>
