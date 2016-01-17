<?php

class buildSite
{
    public function printSite(){
        require './model/model_db_info.php';
        require './model/model_tb_info.php';
        require './model/model_array_info.php';
        $db_info = new dbInfo();
        $tb_info = new tbInfo();
        $array_info = new arrayInfo();

        $this->createHeader();
        $this->createBody($db_info, $tb_info, $array_info);
        $this->createFooter();
    }

    private function createHeader(){
        require './view/1-header/view_print_header.php';
        $head = new buildHeader();
        $head->printHeader();
    }

    private function createBody($db_info, $tb_info, $array_info){

        require 'cont_build_menu.php';
        $menu = new buildMenu();
        $menu->createMenu($db_info, $tb_info);

        require 'cont_build_content.php';
        $body = new buildBody();
        $body->createContent($db_info, $tb_info, $array_info);
    }

    private function createFooter(){
        require './view/4-footer/view_print_footer.php';
        $footer = new buildFooter();
        $footer->printFooter();
    }
}