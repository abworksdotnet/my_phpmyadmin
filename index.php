<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ab-works</title>
    <link href="medias/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="frameworks/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="frameworks/bootstrap/css/bootstrap-custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="bg-customGrey">
</br>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center custom-max-width-300px well">
            <IMG SRC="medias/accueil.jpg" class="img-rounded img-responsive center-block">
            <legend class="text-center">Welcome !</legend>
            <div class="form-group">
                <form action="connection.php" method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <input type="text" id="login" class="form-control" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Connexion" class="btn btn-custom btn-block"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="frameworks/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>