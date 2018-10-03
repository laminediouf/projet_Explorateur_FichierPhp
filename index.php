<?php
if (isset($_POST['username']) && isset($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($username=='lamine' && $password=='diouf'){
        header("location:accueil.php");
    }else{
        echo 'Mot de passe Incorect';
    }

}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Authentification L.D.O.D<small> Kelomak(AccessDakar)</small></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                        </div>
                        <input type="submit" value="Connection" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>