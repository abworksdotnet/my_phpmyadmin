<?php
include './model/model_error_info.php';
$error_info = new errorInfo();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = htmlspecialchars($_POST['login']);
    $pwd = htmlspecialchars($_POST['password']);
    try {
        $dbo = new PDO('mysql:host=localhost;dbname=dblogins', 'ablogins', 'ablogins');
    } catch (Exception $e) {
        die($error_info->loginError());
    }
    $login_check = $dbo->query("SELECT COUNT(*) FROM dblogins.logins WHERE login = '" . $login . "'");

    if ($login_check->fetchColumn() == 0) {
        die($error_info->loginError());
    } else {
        $reponse_login = $dbo->query("SELECT password FROM dblogins.logins WHERE login ='" . $login . "' LIMIT 1");
        $donnees = $reponse_login->fetch();

        if ($pwd == $donnees['password']) {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $pwd;
            header('location: layout.php?page=home&menu=presentation');
        } else {
            die($error_info->loginError());
        }
        $reponse_login->closeCursor();
    }
}
else
    die($error_info->loginError());