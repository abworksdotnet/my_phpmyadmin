<?php

class buildSite
{
    public function printSite(){
        require './model/model_getDbInfo.php';
        require './model/model_getTbInfo.php';
        require './model/model_getArray.php';
        $db_info = new dbInfo();
        $tb_info = new tbInfo();
        $array_info = new arrayBuilder();

        $this->printHead($db_info, $tb_info);
        $this->printBody($db_info, $tb_info, $array_info);
    }

    public function printHead($db_info, $tb_info){

        require './view/view_printLeftMenu.php';
        $leftMenu = new buildLeftMenu();
        $leftMenu->printLeftMenu($db_info, $tb_info);
    }

    public function printBody($db_info, $tb_info, $array_info){

        require './view/view_printBody.php';
        $body = new printBody();

        if (!isset($_GET['database']) && !isset($_GET['table'])){
            $body->printDbInfo($db_info);
        }

        if (isset($_GET['database']) && !isset($_GET['table'])){
            $body->printTbInfo($tb_info);
        }

        if (isset($_GET['database']) && isset($_GET['table'])){
            $body->printArray($array_info);
        }
    }
}