<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fichier php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  
</head>
<body>
    <div class="container navigation">
        <div class="row navigation">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            <div class="navbar-header">
            <img src="img/pro.png" width="70" alt="">
                <ol class="breadcrumb">
                    <li><a href="Accueil.php">Accueil</a></li>
                    <li>Bienvenue</li>
                </ol>
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#navcol-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
            </div>
             <div class="collapse navbar-collapse  navbar-center" id="navcol-1">
             <ul class="nav navbar-nav ">
                               <li role="presentation"><a href="Accueil.php"><img src="img/ac.png" width="20" alt="accueil">
                                   Accueil</a></li>
                               <li role="presentation"><a href="Dossier.php">
                                   <img src="img/dossier.png" width="20" alt="">Dosiers </a></li>
                               <li role="presentation"><a href="Fichiers">
                               <img src="img/fichier.png" width="20" alt="">Fichiers </a></li>
                               <!-- <li role="presentation"><a href="#section3">CONTACT</a></li> -->
                           </ul>
            </div>
       </nav>
</div>
</div>
<div class="container">
    <div class="section">
    <h1>Bienvenue sur notre page <span>LDOD</span></h1>
    <br>
    <br>
    <h3>Pour acceder aux dossiers clicker ici</h3>
    <button class="btn bnt-success"><a href="Dossier.php">clicker</a></button>
    <h3>Pour acceder aux  Fichiers clicker ici</h3>
    <button class="btn bnt-success><a href="Fichiers.php">clicker</a></button>
    </div>
</div>
</body>
</html>
