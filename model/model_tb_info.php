<?php
class tbInfo{
    public function tbName(){

        $query = "show tables";
        $result = $this->tbAccess($query);
        $tb_name = array();

        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            array_push($tb_name, $row[0]);
        }
        $result->closeCursor();
        return $tb_name;

    }

    public function tbCol(){

        $i = 0;
        $tb_name = $this->tbName();
        $tb_col = array();

        while ($i < count($this->tbName())) {
            $query = "SELECT count( * ) FROM information_schema.columns WHERE table_name = '".$tb_name[$i]."'";
            $result = $this->tbAccess($query);
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($tb_col, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $tb_col;
    }

    public function tbRows(){

        $i = 0;
        $tb_name = $this->tbName();
        $tb_rows = array();

        while ($i < count($this->tbName())) {
            $query = 'select count(*) from '.$tb_name[$i];
            $result = $this->tbAccess($query);
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($tb_rows, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $tb_rows;
    }

    private function tbAccess($query){
        $db_name = $_GET['database'];
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname='.$db_name, $_SESSION['login'], $_SESSION['password']);
        $result = $dbo->query($query);
        return $result;
    }
}





