<?php
session_start();

if (!isset($_SESSION['login']) || !isset($_SESSION['password'])) {
    require 'model/model_errors.php';
    $errorMessage = new errorMessages();
    die($errorMessage->error());
}
else {
    require 'controller/cont_build_site.php';
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
    <link href="medias/favicon.ico" rel="shortcut icon" type="image/x-icon" />

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
<?php $site->printSite()?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="frameworks/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="js/app.js"></script>

</body>
</html>

<?php } ?>