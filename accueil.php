<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <STYLE>

    </STYLE>
</head>
<body>
<?php

function list_dir($name) {
    if ($dir = opendir($name)) {
        while($file = readdir($dir)) {
            if(isset($_GET['dossier'])) {
                ?>
                <a href="accueil.php?dossier=<?= $_GET['dossier'] . '/' .$file ?>">
                    <img src="img-dir-close.gif" alt="" >
                    <?= $file ?><br></a>
                <?php
            }
            else {
                ?>
                <a href="accueil.php?dossier=<?= $file ?>">
                    <img src="img-dir-open.gif" alt="" >
                    <?= $file ?><br></a>
                <?php
            }
        }
        closedir($dir);
    }
}
if(isset($_GET['dossier'])) {
    list_dir("./" . $_GET['dossier']);
}
else {
    list_dir("./");
}

//creeation de DOSSIER
    if (isset($_POST['saisi'])){
        $valeursaisi = $_POST['saisi'];
        if (!is_dir($valeursaisi)){
            mkdir($valeursaisi);
            echo '<script> alert("Votre dossier a ete creer avec succes");</script> ';
        }else{
            echo '<script> alert("Erreur votre dossier existe deja");</script> ';
        }

    }
//delete dossier
    if (isset($_POST['saisisup'])){
        $valeursaisi = $_POST['saisisup'];
        if (is_dir($valeursaisi)){
            rmdir($valeursaisi);
            echo '<script> alert("Votre dossier a ete supprimer avec succes");</script> ';
        }else{
            echo '<script> alert("Erreur votre dossier nest pass vue");</script> ';
        }

    }
    // creation de fichier
if (isset($_POST['execut'])){
    file_put_contents($_POST['saisifich'],"Nouveau fichier");
}




?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="saisi" id="saisi">
    <input type="submit" value="Add">
</form>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="saisisup" id="saisisup">
    <input type="submit" value="Delete">
</form>

<form action="accueil.php" method="post">
    <input type="text" name="saisifich" id="saisifich">
    <input type="submit" name="execut" value="Creation fichier">
</form>



</body>
</html>
