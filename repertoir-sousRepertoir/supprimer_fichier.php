<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 04/10/2018
 * Time: 16:11
 */

if(isset($_GET['supprimer']))
{
    $supprimer = $_GET['supprimer'];
    
     unlink($supprimer);
        echo '<script>
                alert("le fichier a ete supprimer");
              </script>';
        header("Location: index.php");

}