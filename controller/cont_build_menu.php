<?php
class buildMenu{
    public function createMenu($db_info, $tb_info){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
                case 'home' :
                    require './view/2-menu/view_print_home_menu.php';
                    $head = new buildHomeMenu();
                    $head->printHomeMenu();
                    break;
                case 'overview' :
                    require './view/2-menu/view_print_sql_menu.php';
                    $head = new buildSqlMenu();
                    $head->printSqlMenu($db_info, $tb_info);
                    break;
            }
        }
    }
}