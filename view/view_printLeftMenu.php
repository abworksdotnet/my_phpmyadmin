<?php

class buildLeftMenu{
    public function printLeftMenu($db_info, $tb_info){

        echo '<div class="col-md-2">';
        echo    '<ul class="nav nav-list">';
        echo            $this->printDBList($db_info);
        echo            $this->printTBList($tb_info);
        echo     '</ul>';
        echo '</div>';
    }

    private function printDBList($db_info)
    {
        $db_name = $db_info->dbName();

        echo    '<li class="nav-header"><strong>Browse databases :</strong></li>';
        echo    '<select class="form-control" id="database">';
        echo        '<option>(Select Database)</option>';
        for ($i = 0; $i < count($db_name); $i++) {
            echo    '<option>' . $db_name[$i] . '</option>';
        }
        echo    '</select>';

    }

    private function printTBList($tb_info){
        if (isset($_GET['database'])){
            echo    '<li class="nav-header"><strong>Browse tables :</strong></li>';
            $tb_name = $tb_info->tbName();
            echo    '<select class="form-control" id="table">';
            echo    '<option>(Select Table)</option>';
            for ($i = 0 ; $i < count($tb_name) ; $i++) {
                echo '<option>' . $tb_name[$i] . '</option>';
            }
            echo '</select>';
        }
    }
}