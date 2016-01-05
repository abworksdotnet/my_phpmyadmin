<?php
session_start();

if (!isset($_SESSION['login']) || !isset($_SESSION['password'])) {
    require 'model/model_errors.php';
    $errorMessage = new errorMessages();
    die($errorMessage->error());
}
else {
    require 'controller/cont_buildSite.php';
    $site = new buildSite();
?>

<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ab-works</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="frameworks/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="frameworks/bootstrap/css/bootstrap-custom.css" rel="stylesheet">
    <style> body {  padding-top: 50px;  } </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <div class="navbar-header">
            <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>-->
            <a href="layout.php" class="navbar-brand glyphicon glyphicon-home" title="Home"></a>
        </div>

        </ul>
        <ul class="nav navbar-nav">
            <li><a href=""><strong>Databases Info</strong></a></li>
            <li><a href="#"><strong>SQL Editor</strong></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a  href="model/model_logout.php"
                    class="glyphicon glyphicon-log-out"
                    <?php echo 'title=\'Logout '. $_SESSION['login'] . '\''; ?>>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row well">
        <?php $site->printSite()?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="frameworks/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="js/app.js"></script>
</body>
</html>

<?php } ?>