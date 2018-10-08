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
            </div>
             <div class="collapse navbar-collapse  navbar-center" id="navcol-1">
             <ul class="nav navbar-nav ">
                               <li role="presentation"><a href="index.php">Authentification</a></li>
                             
                           </ul>
            </div>
       </nav>
</div>
</div>
<div id="section" class="section">
        <div class="log"><h1>login</h1></div >       
         <div class="container-form">
              <form class="form"  action="explorateur.php" method="POST">
                <div class="row">
                   <div class="form-group">
                     <div class="col-xs-12" >
                        <label for="name"  class="control-label">log</label>
                            <input type="text" placeholder="Nom d'utilsateur" name="username"  id="username" required="required" class="form-control" style="color:rgb(31, 27, 27)" >	 
                            <span id="errorName"></span>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                         <div class="col-xs-12" >
                            <label for="password"  class="control-label">password</label>
                            <input type="password" placeholder="Enter password" name="PASSWORD"  id="password" required="required" class="form-control" style="color:rgb(31, 27, 27)">	 
                            <span id="errorpassword"></span>
                          </div>
                    </div> 
                 </div> 
                 <br>
                 <button class="btn btn-success">Envoyer</button>
            </form>
        </div>
</div>    
   
</body>
</html>