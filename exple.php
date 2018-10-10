<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
 include('menu.php');
 /*
 else {
             if (!is_file($name . '' . $file)) {
                 ?>
                 <div class="section col-xs-6">
                     <a class="imag" href="#Dossier.php?dossier=<?= $file ?>"><img src="img/fichier.png" alt=""
                                                                                   width="15" height="15">
                         <?= $file ?><br>
                     </a>
                 </div>
                 <?php
             }
             elseif (!is_dir($name . '' . $file)) {
                 ?>
                 <div class="section col-xs-6">
                     <a class="img" href="Dossier.php?dossier=<?= $file ?>">
                         <img src="img/img-dir-close.gif" alt="" width="15" height="15">
                         <?= $file ?><br>
                     </a>
                 </div>
             <?php }
         }
 */
/*
function list_dir($name) {
  if ($dir = opendir($name)) {

    while($file = readdir($dir)) {
      if($file != '.' && $file != "..") {
      if(is_dir($name .''.$file))
      {
            if(isset($_GET['dossier'])) {
              ?>

                 <a href="Dossier.php?dossier=<?= $_GET['dossier'] . '/' .$file ?>"><br>
                        <img src="img/doss1.png" alt="" width="30" height="30" ><br>
                        <?php $file ?><br>
                 </a>
            <?php
                }

           else{
                ?>

                  <div class="section col-sm-3">
                     <a class="img" href="Dossier.php?dossier=<?= $file ?>">
                         <img src="img/doss1.png" alt="" width="30" height="30" >
                      <?= $file ?><br>
                     </a>
                  </div>

              <?php
              }
      }

         else{
            ?>
             <div class="section col-sm-3">
              <a class="imag" href="#Dossier.php?dossier=<?= $file ?>"><img src="img/fich1.png" alt="" width="30" height=30 >
                 <?= $file ?><br>
              </a>
            </div>
          <?php
          }


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
*/
?>
</body>
</html>
