<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//include 'menu.php';
/*
if ($dir = opendir("C:\wamp64\www")) {
    echo "Pointeur: ".$dir."<br>\n";
    echo "Chemin: ".getcwd()."<br>\n";
    while($file = readdir($dir)) {
        echo "$file<br>\n";
    }
    closedir($dir);
}
function list_dir($name) {
    if ($dir = opendir($name)) {
        while($file = readdir($dir)) {
            echo "$file<br>\n";
            if(is_dir($file) && !in_array($file, array(".",".."))) {
                list_dir($file);
            }
        }
        closedir($dir);
    }
}
list_dir(".");*/
/*
function ouvrirdoss(){
    $dossier = "";
    if(isset($_GET['dossier'])){
        $dossier = "C:/wamp64/www/".$_GET['dossier']."/";
    }else{
        $dossier="C:/wamp64/www/";
    }
  affiche($dossier);
}
function affiche($dossierfich)
{

    // $nb_fichier = 0;
    echo '<ul>';
    if ($dossier = opendir($dossierfich)) {
        while (false !== $fichier = readdir($dossier)) {
            if ($fichier != '.' && $fichier != "..") {
                if (is_dir($dossierfich . '' . $fichier)) {
                    if (isset($_GET['dossier'])) {
                        ?>
                        <a href="accueil.php?dossier=<?= $_GET['dossier'] . '/' . $fichier ?>">
                            <img src="img-dir-open.gif"><?= $fichier ?>
                        </a>
                    <?php } else {
                        ?>
                        <a href="accueil.php?dossier=<?= $fichier ?>">
                            <img src="img-dir-open.gif"/>
                            <?= $fichier ?>
                        </a>
                        <?php
                    }
                    {
                        ?>
                        <img src="img-dir-close.gif"/>
                        <?= $fichier ?>
                        <?php
                    }
                }
            }
            closedir($dossier);
        }
        echo '</ul>';
    }
}

$nb_fichier++; // On incrémente le compteur de 1
echo '<li> <img src="img-dir-open.gif"/> <a href="./mondossier/' . $fichier . '">' . $fichier . '</a></li>';
                        }
                    else
                        {
                            $nb_fichier++; // On incrémente le compteur de 1
                            echo '<li> <a href="./mondossier/' . $fichier . '">' . $fichier . '</a></li>';
                        }
                }
                else
                    {
                        echo '<li> <a href="./mondossier/' . $fichier . '"></a></li>';
                    }
            }

        }

        echo '</ul><br />';
        echo 'Il y a <strong>' . $nb_fichier . '</strong> fichier(s) dans le dossier';

        closedir($dossier);
    } else echo 'Le dossier n\' a pas pu être ouvert';

}*/

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
    list_dir("../" . $_GET['dossier']);
}
else {
    list_dir("../");
}


?>

<button type="submit" id="nouv" name="nouv" onclick="creerdossier()" >Nouveau</button>
<script>
  function creerdossier()
  {
      $dossier = 'nouveau_dossier';
      if(!is_dir($dossier)){
          mkdir($dossier);
      }

  }
</script>
</body>
</html>
