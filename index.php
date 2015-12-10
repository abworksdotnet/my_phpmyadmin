<!DOCTYPE HTML>
<html ng-app>
    <head>
    	<title>ab-works</title>
    	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="content/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="background">
        <br />
        <div class="container">
            <div class="row">
                <div class="span4 offset4 well">
                    <IMG SRC="content/accueil.jpg" ALT="my_phpmyadmin" TITLE="my_phpmyadmin">
                    <legend class="text-center">Welcome !</legend>
                    <form action="content/login.php" method="post" accept-charset="UTF-8">
                        <input type="text" id="login" class="span4" name="login" placeholder="Login">
                        <input type="password" id="password" class="span4" name="password" placeholder="Password">
                        <input type="submit" value="Connexion" class="btn btn-info btn-block"/>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="bootstrap/jquery/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>