<?php

class buildSite
{
    public function printSite(){
        require './model/model_db_info.php';
        require './model/model_tb_info.php';
        require './model/model_array_info.php';
        require './model/model_errors.php';
        $db_info = new dbInfo();
        $tb_info = new tbInfo();
        $error = new errorMessages();
        $array_info = new arrayInfo();

        $this->createHead();
        $this->createMenu($db_info, $tb_info, $error);
        $this->createBody($db_info, $tb_info, $array_info, $error);
    }

    private function createHead(){

        require './view/view_print_head.php';
        $head = new buildHead();
        $head->printNavBar();
    }

    private function createMenu($db_info, $tb_info, $error){

        require './view/view_print_menu.php';
        $menu = new buildMenu();
        $menu->printMenu($db_info, $tb_info, $error);
    }

    private function createBody($db_info, $tb_info, $array_info, $error){

        require './view/view_print_body.php';
        $body = new buildBody();
        $body->printBody($db_info, $tb_info, $array_info, $error);
    }
}