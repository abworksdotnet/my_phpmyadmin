<?php
class errorMessages
{
    public function error()
    {
        $error = '<body onLoad="alert(\'Invalid username or password\')"><meta http-equiv="refresh" content="0;URL=../">';
        return $error;
    }

    public function postError($message)
    {
        $error = '<body onLoad="alert(\''.$message.'\')"><meta http-equiv="refresh" content="0;URL=./layout.php">';
        return $error;
    }
}