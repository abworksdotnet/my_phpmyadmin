<?php
class arrayInfo{
    public function arrayResult()
    {
        $db_name = $_GET['database'];
        $tb_name = $_GET['table'];
        $sql = 'SELECT * FROM ' . $db_name . '.' . $tb_name . ' LIMIT 0,10';
        if (isset($_GET['rows']) && is_numeric($_GET['rows'])){
            if ($_GET['rows'] == 0)
                $sql = 'SELECT * FROM ' . $db_name . '.' . $tb_name;
            else if ($_GET['rows'] > 0)
                $sql = 'SELECT * FROM ' . $db_name . '.' . $tb_name . ' LIMIT 0,'.$_GET['rows'];
            else
                die('Invalid rows requested');
        }
        if (isset($_GET['rows']) && !is_numeric($_GET['rows']))
            die('Invalid rows requested');

        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db_name, $_SESSION['login'], $_SESSION['password']);
        $result = $dbo->query($sql);
        return $result;
    }

    public function arrayRow(){
        $result = $this->arrayResult();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}