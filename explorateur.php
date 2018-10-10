<?php

$racine='./Dossier.php';      //on stock le chemin vers la racine
//on initialise path
$path="";
/*echo "<a href='$racine'> Racine</a>";*/

if(sizeof($_GET) != 0)
{
    $path = $_GET["path"];
}
if(strlen($path)==0) $path=".";
else if ($path !=".")
{
    $parent_dir = substr($path,0,strrpos($path,"/")); //contient le dossier précédemment visité


    echo "<a href='./Dossier.php?path=$parent_dir'><img src='img/return.png'></a>"; //lien vers le dossier précédent
    ?>

    <?php
}
// on ouvre le dossier et on le parcourt
$dir = opendir($path);
$directories=array();
$files=array();
while($file = readdir($dir))
{
    if($file != "." && $file != ".." && $file != "index.php" && $file != "explorateur.php" && $file != "img"&& $file != "css" && $file != "js" && $file != "fonts")
    {
        // on stock les dossiers et les fichiers dans deux variables différentes
        if(is_dir("$path/$file"))
        {
            $directories[]="$file";
        }
        else $files[]="$file";
    }
}
// on tri le tableau directories
if(isset($directories))
{
    sort($directories);
    foreach($directories as $d) //on parcourt le tableau et on l'affiche
    {
        //avec un icône pour les dossiers
        echo "<a href='./Dossier.php?path=$path/$d'><img src='img/doss1.png'>$d</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        //et un lien vers les sous dossiers
        ?>
        <?php
    }
}
// on trie les fichoers dans l'ordre alphabétique
if(isset($files))
{
    sort($files);
    if($files!= 'Dossier.php')
    {
        foreach($files as $files2)

        {
            $extension = pathinfo($files2, PATHINFO_EXTENSION);

            if ($extension=="pdf")
            {
                echo "<a href=\"$path/$files2\" > <img src='img/pdf.png'> $files2 </a>";

            }
            elseif ($extension == "png"  || $extension =="jpg"|| $extension =="JPG" || $extension =="jpeg" || $extension =="ico" )
            {

                echo "<a href=\"$path/$files2\" > <img src='img/picture.png'> $files2 </a>";

            }
            elseif ($extension == "mp3" )
            {

                echo "<a href=\"$path/$files2\" > <img src='img/mp3.png'> $files2 </a>";

            }
            elseif ($extension == "txt" || $extension == "docx" )
            {

                echo "<a href=\"$path/$files2\" > <img src='img/txt.png'> $files2 </a>";

            }
            else if ( $extension!="pdf" && "png" && "jpg"&& "JPG" && "jpeg" && "mp3" && "ico" && "doc" && "docx")
            {
                echo "<a href=\"$path/$files2\" > <img src='img/fich1.png'>$files2 </a>";
            }           //ouverture du fichier dans une nouvelle fenêtre

        }
    }
}
//on ferme la lecture dossier
closedir($dir);




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
//delete dossier AND fICHIER
if (isset($_POST['executdeletdoc'])) {
    if (isset($_POST['saisisup'])) {
        $valeursaisi = $_POST['saisisup'];
        if (is_dir($valeursaisi))
        {
            rmdir($valeursaisi);
            echo '<script> alert("Votre dossier a ete supprimer avec succes");</script> ';
        } elseif (is_file($valeursaisi))
        {
            unlink($valeursaisi);
            echo '<script> alert("Votre Fichier a ete supprimer avec succes");</script> ';
        }else{
            echo '<script> alert("Erreur votre dossier nest pass vue");</script> ';
        }

    }
}

// creation de fichier
if (isset($_POST['execut'])){
    file_put_contents($_POST['saisifich'],"Nouveau fichier");
}

// Renommer un fichier
if (isset($_GET['executRenomFichier'])){
    $recupnomficharenomer=$_GET['saisiNomFichieraRenomer'];
    $NomnouvficheRenomer=$_GET['saisiRenomFichier'];
    if(!rename("$recupnomficharenomer", "$NomnouvficheRenomer")){
        echo "<script> alert('Impossible de renommer.')</script>";
    }else{
        echo "<script> alert('Fichier Renommer')</script>";
    }
}

// Copier un fichier
if (isset($_GET['executCopie'])){
    $file=$_GET['saisiFichierACopier'];
    $newfile=$_GET['saisiNouvNomFichierCopier'];
    if (!copy($file, $newfile)) {
        echo "<script> alert('La copie $file du fichier a échoué...')</script>";
    }else{
        echo "<script> alert('Copie du Fichier effectuer Merci!')</script>";
    }
}

//upload
if (isset($_POST['upload'])){
    $fichier = $_FILES['file']['name'];
    $taille_max = 297152;
    $taille = filesize($_FILES['file']['tmp_name']);

    if ($taille > $taille_max){
        $error = '<div class="alert">Fichier trop volumineux ...</div>';
    }
    if (!isset($error)){

        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$fichier);
    } else {
        echo $error;
    }
}

?>


