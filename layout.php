<?php
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    require 'controller/cont_build_site.php';
    $site = new buildSite();
    $site->printSite();
}
else {
    require 'model/model_error_info.php';
    $errorMessage = new errorMessages();
    die($errorMessage->loginError());
}

