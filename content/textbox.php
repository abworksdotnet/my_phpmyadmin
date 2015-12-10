<?php
session_start ();
?>

<!DOCTYPE HTML>
<html ng-app>
    <head>
    	<title>ab-works</title>
    	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<div> <!--class="well"-->
			<p class="muted">Write here your SQL queries for "localhost":</p>
			<textarea id='output' class="span9" name="message" rows="12"></textarea>
		</div>
		<button class="btn" onclick="javascript:eraseText();">Empty</button>
	    <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   		<script type="text/javascript" src="showHide.js"></script>
    </body>
</html>