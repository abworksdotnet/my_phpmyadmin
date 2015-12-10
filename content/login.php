<?php

$server_valide = "localhost";
$login_valide = "abdotnet";
$pwd_valide = "abdotnet";

if (isset($_POST['login']) && isset($_POST['password']))
{
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['password'])
	{
		session_start ();
		$_SESSION['server'] = $server_valide;
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];
		header ('location: mydatabases.php');
	}
	else
	{
		echo '<body onLoad="alert(\'Invalid settings, please try again\')">';
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
	}
}
else
	echo 'Some forms have not been declared and are missing.';
?>