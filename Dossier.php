<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
.conteneur{
    position: relative;
left:20px;
top:-20em;
font-size:30px;
}
.conten{
    position: relative;
    background-color: rgba(207, 33, 33, 0.274) !important;
    width:100%;
    height:700px;
    top: 100px;
   
}
</style>
</head>
<body>
<?php
?>
<div class="conten">
<?php include('menu.php'); ?>
</div>  
<div class="conteneur">
<?php include "explorateur.php"; ?>
  <!--creation dossier -->
    <form action="Dossier.php" method="post">
        <input type="text" name="saisi" id="saisi">
        <input type="submit" name="executcredoc" value="Add">
    </form>
    <!--suppression dossier -->
    <form action="Dossier.php" method="post">
        <input type="text" name="saisisup" id="saisisup">
        <input type="submit" name="executdeletdoc" value="Delete">
    </form>
    <!--creation fichier -->
    <form action="Dossier.php" method="post">
        <input type="text" name="saisifich" id="saisifich">
        <input type="submit" name="execut" value="Creation fichier">
    </form>
    <!--suppression fichier -->
    <form action="Dossier.php" method="get">
        <input type="text" name="saisifichsup" id="saisifichsup">
        <input type="submit" name="executsupfich" value="supprimer fichier">
    </form>
    <!--renommer un fichier -->
    <form action="Dossier.php" method="get">
        <input type="text" name="saisiNomFichieraRenomer" id="saisiNomFichieraRenomer">
        <input type="text" name="saisiRenomFichier" id="saisiRenomFichier">
        <input type="submit" name="executRenomFichier" value="Renommer fichier">
    </form>

    <!--Copier un fichier -->
    <form action="Dossier.php" method="get">
        <input type="text" name="saisiFichierACopier" id="saisiFichieraCopier">
        <input type="text" name="saisiNouvNomFichierCopier" id="saisiNouvNomFichierCopier">
        <input type="submit" name="executCopie" value="Copier fichier">
    </form>

</div>

</body>
</html>