<?php
include './model/model_errors.php';
$errorMessage = new errorMessages();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = htmlspecialchars($_POST['login']);
    $pwd = htmlspecialchars($_POST['password']);
    try {
        $dbo = new PDO('mysql:host=localhost;dbname=mpma', 'abworks', 'abworks');
    } catch
    (Exception $e) {
        die($errorMessage->error());
    }
    $login_check = $dbo->query("SELECT COUNT(*) FROM mpma.logins WHERE login = '" . $login . "'");

    if ($login_check->fetchColumn() == 0) {
        die($errorMessage->error());
    } else {
        $reponse_login = $dbo->query("SELECT password FROM mpma.logins WHERE login ='" . $login . "' LIMIT 1");
        $donnees = $reponse_login->fetch();

        if ($pwd == $donnees['password']) {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $pwd;
            header('location: layout.php');
        } else {
            die($errorMessage->error());
        }
        $reponse_login->closeCursor();
    }
}
else
    die($errorMessage->error());