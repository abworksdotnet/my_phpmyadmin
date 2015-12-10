<?php
session_start ();
if (isset($_SESSION['server']) && isset($_SESSION['login']) && isset($_SESSION['password'])) {
?>

<!DOCTYPE HTML>
<html ng-app>
    <head>
    	<title>ab-works</title>
    	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    	<link href="../select/bootstrap-select.css" rel="stylesheet" media="screen">
    	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
   		<div class="head backgroundcanvas">
    		<div class="row-fluid">
    			<div class="span3">
    				<h1>MY_PHPMYADMIN</h1>
    			</div>
    			<div class="span4 offset5" style="margin-top:15px;">
    				<a class="btn offset7" href="logout.php">Logout from <i><?php echo $_SESSION['login']; ?></i></a>
    			</div>
    		</div>
    		<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
    				<div class="container">
    					<ul class="nav">
    						<li><a href="mydatabases.php">My Databases</a></li>
    						<li><a href="sqleditor.php">SQL Editor</a></li>
						</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="container-well">
    		<div class="row-well">
				<div class="span4" id="foo">
				    <div class="sidebar-nav">
			    		<div class="well">
			   				<ul class="nav nav-list">
			    				<li class="nav-header">Browse databases :</li>
			    				<select class="span3 selectpicker">
			    					<option>(Select Database)</option>
									<?php
									try {
										$conn = @mysql_connect( $_SESSION['server'], $_SESSION['login'], $_SESSION['password']) or die("Unable to connect to MySQL");
										$result = mysql_list_dbs( $conn );
										while( $row = mysql_fetch_object( $result ) ):
											echo '<option>'.$row->Database.'</option>';
										endwhile;
										echo '</select></br>
											  <li class="nav-header">Browse Tables :</li>
											  <select class="span3 selectpicker">
											    <option>(Select Table)</option>';
											    mysql_connect($server, $login, $password);
											    $db = "DATABASE_TEST";
												$res = mysql_query("SHOW TABLES FROM $DB");
												while($row = mysql_fetch_array($res, MYSQL_NUM)) {
											    	echo '<option>'.$row[0].'</option>';
												}
												echo '</select></ul>'; 
										mysql_free_result( $result );
										mysql_close( $conn );
									}
									catch (Exception $e) {
										echo $e->getMessage();
									}    
									?>									    			
			    		</div>
			   		</div>
			   	</div>
	   				<div class="span10"><?php include("menu.php");?>
				</div>
			</div>
		</div>

		<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Delete Confirmation</h3>
			</div>
		    <div class="modal-body">
		   		<p class="error-text">Are you sure you want to delete the user?</p>
		    </div>
		    <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		    	<button class="btn btn-danger" data-dismiss="modal">Delete</button>
		    </div>
	    </div>
	    <script type="text/javascript" src="../bootstrap/jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../select/bootstrap-select.js"></script>
   		<script type="text/javascript" src="showHide.js"></script>
    </body>
</html>

<?php
}
else
    echo '<p>Invalid Username/Password Combination</p>';
?>