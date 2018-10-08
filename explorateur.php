<?php
if (isset ($_POST['username']) && isset($_POST ['PASSWORD']))
{
$username=$_POST['username'];
$PASSWORD=$_POST[ 'PASSWORD'];
if( $username=='oumou' && $PASSWORD=='DEME'){
    header('location:Accueil.php');
}
else{
    echo('mot de pass incorrect');
   }
}



function list_dir($name) {
  if ($dir = opendir($name)) { 
   
    while($file = readdir($dir)) {
      if($file != '.' && $file != "..") {
      if(is_dir($name .''.$file)){
        if(isset($_GET['dossier'])) {
          ?>
          
          <a href="Dossier.php?dossier=<?= $_GET['dossier'] . '/' .$file ?>"><br>
              <img src="img/img-dir-close.gif" alt="" width="30" height="30" ><br>
            <?= $file ?><br></a>
            <?php
            }
       
       
          else{
            ?>
           
              <div class="section col-xs-6">
             <a class="img" href="Fichiers.php?dossier=<?= $file ?>">
                 <img src="img/img-dir-close.gif" alt="" width="30" height="30" >
              <?= $file ?><br>
             </a>
              </div>
           
          <?php
          }
       
        }
      
        /* else{
            ?>
           
            <div class="section col-xs-6">
           <a class="imag" href="#Fichiers.php?dossier=<?= $file ?>"><img src="img/fichier.png" alt="" width="30" height="30" >
          <?= $file ?><br></a>
          </div>
          <?php
          }
        */
          
        } 
    }
    closedir($dir);
  }
}
if(isset($_GET['dossier'])) {
  list_dir("../" .''. $_GET['dossier']);
}
else {
  list_dir("../");
}

//creeation de DOSSIER
if (isset($_POST['executcredoc'])) {
    if (isset($_POST['saisi'])) {
        $valeursaisi = $_POST['saisi'];
        if (!is_dir($valeursaisi)) {
            mkdir($valeursaisi);
            echo '<script> alert("Votre dossier a ete creer avec succes");</script> ';
        } else {
            echo '<script> alert("Erreur votre dossier existe deja");</script> ';
        }

    }
}
//delete dossier
if (isset($_POST['executdeletdoc'])) {
    if (isset($_POST['saisisup'])) {
        $valeursaisi = $_POST['saisisup'];
        if (is_dir($valeursaisi)) {
            rmdir($valeursaisi);
            echo '<script> alert("Votre dossier a ete supprimer avec succes");</script> ';
        } else {
            echo '<script> alert("Erreur votre dossier nest pass vue");</script> ';
        }

    }
}
// creation de fichier
if (isset($_POST['execut'])){
    file_put_contents($_POST['saisifich'],"Nouveau fichier");
}
// Suppression de fichier
if (isset($_GET['executsupfich'])){
    $sup=$_GET['saisifichsup'];
    unlink($sup);
}
// Renommer un fichier
if (isset($_GET['executRenomFichier'])){
    $recupnomficharenomer=$_GET['saisiNomFichieraRenomer'];
    $NomnouvficheRenomer=$_GET['saisiRenomFichier'];
    if(!rename("$recupnomficharenomer", "$NomnouvficheRenomer")){
        echo "Impossible de renommer.";
    }
}

// Copier un fichier
if (isset($_GET['executCopie'])){
    $file=$_GET['saisiFichierACopier'];
    $newfile=$_GET['saisiNouvNomFichierCopier'];

    if (!copy($file, $newfile)) {
        echo "La copie $file du fichier a échoué...\n";
    }
}



?>


