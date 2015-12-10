<?php
session_start ();
if (isset($_SESSION['server']) && isset($_SESSION['login']) && isset($_SESSION['password'])) {
        $username = $_SESSION['login'];
        $password = $_SESSION['password'];
        $hostname = $_SESSION['server'];
        if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {
                $filename = pathinfo($_FILES['monfichier']['basename']);
                $dirname = pathinfo($_FILES['monfichier']['dirname']);
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('sql');
                if (in_array($extension_upload, $extensions_autorisees)) {
                        $sConnString = mysql_connect($hostname, $username, $password)
                        or die("Unable to connect to MySQL");
                        $restore_from = $dirname. '/' .$filename;
                        $command = "$restore_from | -u$username -p$password $dbname";
                        if(system($command) === FALSE)
                            echo "Failed to Restore database.";
                        else
                            echo "Database Restored successfully.";
                }
        }
}
?>