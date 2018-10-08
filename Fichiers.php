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
                    <li><a href="index.php">Accueil</a></li>
                    <li>Fichiers</li>
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
                                   <img src="img/dos.png" width="20" alt="">Dosiers </a></li>
                               <li role="presentation"><a href="Fichiers">
                               <img src="img/fichier.png" width="20" alt="">Fichiers </a></li>
                               <!-- <li role="presentation"><a href="#section3">CONTACT</a></li> -->
                           </ul>
            </div>
       </nav>
</div>
</div>

</body>
</html>
<?php
function list_dir($name) {
  if ($dir = opendir($name)) { 
   
    while($file = readdir($dir)) {
      if($file != '.' && $file != "..") {
      if(is_dir($name .''.$file)){
        if(isset($_GET['dossier'])) {
          ?>
          
          <a href="Dossier.php?dossier=<?= $_GET['dossier'] . '/' .$file ?>"><br>
              <img src="img/dosier.png" alt="" width="30" height="30" ><br>
            <?= $file ?><br></a>
            <?php
            }
       
       
          /*else{
            ?>
           
              <div class="section col-xs-6">
             <a class="img" href="Fichiers.php?dossier=<?= $file ?>"><img src="img/dossier.png" alt="" width="30" height="30" >
              <?= $file ?><br></a>
              </div>
           
          <?php
          }*/
       
        }
      
         else{
            ?>
           
            <div class="section col-xs-6">
           <a class="imag" href="Fichiers.php?dossier=<?= $file ?>"><img src="img/fichier.png" alt="" width="30" height="30" >
          <?= $file ?><br></a>
          </div>
          <?php
          }
        
          
        } 
    }
    closedir($dir);
  }
}
if(isset($_GET['dossier'])) {
  list_dir("C:/wamp64/www/" .''. $_GET['dossier']);
}
else {
  list_dir("C:/wamp64/www/");
}
?>

