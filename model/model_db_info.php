<?php

class dbInfo{

    public function dbName()
    {
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=information_schema', $_SESSION['login'], $_SESSION['password']);
        $result = $dbo->query("show databases");
        $db_name = array();

        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            if ($row[0] != 'information_schema')
                array_push($db_name, $row[0]);
        }
        $result->closeCursor();
        return $db_name;
    }

    public function dbSize(){
        $i = 0;
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=information_schema', $_SESSION['login'], $_SESSION['password']);
        $db_name = $this->dbName();
        $db_size = array();

        while ($i < count($this->dbName())) {
            $result = $dbo->query('select sum(round(((data_length + index_length) / 1024), 2)) from information_schema.TABLES  WHERE table_schema = "'.$db_name[$i].'"');
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($db_size, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $db_size;
    }

    public function dbCreationDate(){

        $i = 0;
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=information_schema', $_SESSION['login'], $_SESSION['password']);
        $db_name = $this->dbName();
        $db_creationDate = array();

        while ($i < count($this->dbName())) {
            $result = $dbo->query('SELECT create_time FROM INFORMATION_SCHEMA.TABLES WHERE table_schema = "'.$db_name[$i].'"');
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($db_creationDate, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $db_creationDate;
    }
}