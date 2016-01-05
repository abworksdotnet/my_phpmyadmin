<?php
class arrayBuilder{
    public function arrayResult()
    {
        $db = $_GET['database'];
        $table = $_GET['table'];

        $dbo = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=' . $db, 'abworks', 'abworks');
        $sql = 'SELECT * FROM ' . $db . '.' . $table;
        $result = $dbo->query($sql);
        return $result;

    }

    public function arrayRow(){
        $result = $this->arrayResult();
        $row = $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}