<?php
class tbInfo{
    public function tbName()
    {
        $db_name = $_GET['database'];
        try {
            $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db_name, 'abworks', 'abworks');
        } catch (Exception $e) {$e->getMessage();}
        $result = $dbo->query("show tables");
        $tb_name = array();

        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            array_push($tb_name, $row[0]);
        }
        $result->closeCursor();
        return $tb_name;
    }

    public function tbCol(){
        $db_name = $_GET['database'];
        $i = 0;
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname='.$db_name, 'abworks', 'abworks');
        $tb_name = $this->tbName();
        $tb_col = array();
        while ($i < count($this->tbName())) {
            $result = $dbo->query("SELECT count( * ) FROM information_schema.columns WHERE table_name = '".$tb_name[$i]."'");
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($tb_col, $row[0]);
                $i++;
            }
            $result->closeCursor();
        }
        return $tb_col;
    }

    public function tbRows(){
        $db_name = $_GET['database'];
        $i = 0;
        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname='.$db_name, 'abworks', 'abworks');
        $tb_name = $this->tbName();
        $tb_rows = array();
        while ($i < count($this->tbName())) {
            $result = $dbo->query('select count(*) from '.$tb_name[$i]);
            while ($row = $result->fetch(PDO::FETCH_NUM)) {
                array_push($tb_rows, $row[0]);
            }
            $i++;
            $result->closeCursor();
        }
        return $tb_rows;
    }
}





