<?php
class checkURL{
    public function isPostATable(){
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];
        $db = $_GET['database'];
        $table = htmlspecialchars($_POST['table']);
        $answer = false;
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db, $login, $password);
        $result = $dbo->query("USE ".$db."; SHOW TABLES; SELECT FOUND_ROWS() WHERE Tables_in_".$db." = ".$table.";");
        if ($result == 1)
            $answer = true;
        return $answer;
    }
}