<?php
class errorInfo{
    public function loginError(){
        $error = '<body onLoad="alert(\'Invalid username or password\')"><meta http-equiv="refresh" content="0;URL=../">';
        return $error;
    }

    public function postError($message){
        $page = $_GET['page'];
        $error =    '<bodyOnLoad="alert(\''.$message.'\')"><meta  http-equiv="refresh" content="0;URL=./layout.php?page='.$page.'">';
        return $error;
    }
}