<?php

class dbInfo{

    public function dbName()
    {
        $db = "information_schema";
        $query = "show databases";
        $result = $this->dbAccess($db, $query);
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
        $db_name = $this->dbName();
        $db = "information_schema";
        $query = 'select sum(round(((data_length + index_length) / 1024), 2)) from information_schema.TABLES  WHERE table_schema = "'.$db_name[$i].'"';
        $db_size = array();

        while ($i < count($this->dbName())) {
            $result = $this->dbAccess($db, $query);
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
        $db = "information_schema";
        $db_name = $this->dbName();
        $query = 'SELECT create_time FROM INFORMATION_SCHEMA.TABLES WHERE table_schema = "'.$db_name[$i].'"';
        $db_creationDate = array();


        while ($i < count($this->dbName())) {
            $result = $this->dbAccess($db, $query);
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($db_creationDate, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $db_creationDate;
    }

    private function dbAccess($db, $query){
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname='.$db, $_SESSION['login'], $_SESSION['password']);
        $result = $dbo->query($query);
        return $result;
    }
}