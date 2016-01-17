<?php

class buildBody{
    public function createContent($db_info, $tb_info, $array_info){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
                case 'home' :
                    require './view/3-content/view_print_home.php';
                    $body = new buildHome();
                    $body->printHome();
                    break;
                case 'overview' :
                    require './view/3-content/view_print_overview.php';
                    $body = new buildOverview();
                    $body->printOverview($db_info, $tb_info, $array_info);
                    break;
                case 'editor' :
                    require './view/3-content/view_print_editor.php';
                    $body = new buildEditor();
                    $body->printEditor();
                    break;
            }
        }
    }
}