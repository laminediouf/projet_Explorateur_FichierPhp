<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!--Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->


    <title>Document</title>
</head>
<body>


<?php include('menu.php'); ?>
<div class="container-fluid">
    <ul class="nav">
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Nouveau Dossier</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalfichier">Nouveau Fichier</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalrenommer">Renommer</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalcopier">Copier</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalsupp">Supprimer</button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalUpload">Importer </button>
        </li>
    </ul>
</div>

    <div class="container-fluid bg-grey">
    <?php include "explorateur.php"; ?>
            <!-- Creation du Dossier-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Creation de Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Dossier.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom du Dossier:</label>
                                    <input type="text" name="saisi" id="saisi" class="form-control"> <br>
                                    <div class="modal-footer">
                                    <input type="submit" name="executcredoc"  class="btn btn-default"value="Nouveau Dossier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de creation de dossier-->
            <!-- Creation Fichier  -->
            <div class="modal fade" id="myModalfichier" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Creation de Fichier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Dossier.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom du Fichier:</label>
                                    <input type="text" name="saisifich" id="saisifich" class="form-control"> <br>
                                    <div class="modal-footer">
                                        <input type="submit" name="execut"  class="btn btn-default"value="Nouveau Fichier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Creation Fichier-->
            <!-- Renommer un Fichier-->
            <div class="modal fade" id="myModalrenommer" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Renommer Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Dossier.php" method="get">
                                <div class="form-group">
                                    <input type="text" name="saisiNomFichieraRenomer" id="saisiNomFichieraRenomer" placeholder="Nom a Renommer" class="form-control">
                                    <input type="text" name="saisiRenomFichier" id="saisiRenomFichier" placeholder="Nouveau Nom" class="form-control">
                                    <div class="modal-footer">
                                        <input type="submit" name="executRenomFichier"  class="btn btn-default"value="Renommer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Renommer Fichier -->
            <!-- Copier -->
            <div class="modal fade" id="myModalcopier" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Copier un Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Dossier.php" method="get">
                                <div class="form-group">
                                    <input type="text" name="saisiFichierACopier" id="saisiFichierACopier" placeholder="Nom a Copier" class="form-control">
                                    <input type="text" name="saisiNouvNomFichierCopier" id="saisiNouvNomFichierCopier" placeholder="Nouveau Nom" class="form-control">
                                    <div class="modal-footer">
                                        <input type="submit" name="executCopie"  class="btn btn-default" value="Copier">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Copier-->
            <!-- Suppression de Dossier-->
            <div class="modal fade" id="myModalsupp" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Supprimer un Fichier ou Dossier</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Dossier.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom</label>
                                    <input type="text" name="saisisup" id="saisisup" placeholder="Nom du Fichier ou Dossier" class="form-control"> <br>
                                    <div class="modal-footer">
                                        <input type="submit" name="executdeletdoc"  class="btn btn-default"value="Supprimer">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de Suppression de dossier-->
        <!-- Telecharger -->
        <div class="modal fade" id="myModalUpload" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Importer un Fichier ou Dossier</h4>
                    </div>
                    <div class="modal-body">
                        <form action="Dossier.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nom</label>
                                <input type="file" name="file" id="file" class="form-control"> <br>
                                <div class="modal-footer">
                                    <input type="submit" name="upload"  class="btn btn-default" value="Importer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Telecharger -->
    </div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>