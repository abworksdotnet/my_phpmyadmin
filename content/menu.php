<?php session_start(); ?>
<!DOCTYPE HTML>
<html ng-app>
    <head>
    	<title>ab-works</title>
    	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<div class="well">
			<button title="Show/Hide Sidebar" class="btn btn-small" onclick="toggle_visibility('foo');"><i class="icon-black icon-resize-horizontal"></i></button>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Database Info</th>
						<th>Size</th>
						<th>Date of Creation</th>
						<th style="width: 36px;"></th>
					</tr>
				</thead>
				<tbody>
					<?php
						try {
							$conn = @mysql_connect( $_SESSION['server'], $_SESSION['login'], $_SESSION['password']) or die();
							$result = mysql_list_dbs( $conn );
							$dbsize = 0;
							$i = 1;
							while( $row = mysql_fetch_object( $result ) ):
							{
								echo '<tr><td>'.$i.'</td><td>'.$row->Database.'</td></tr>';
								$i++;
							}
							endwhile;
							mysql_free_result( $result );
							mysql_close( $conn );
						}
						catch (Exception $e) {
							echo $e->getMessage();
						}    
					?>
				</tbody>
			</table>
		</div>
		<div class="pagination">
			<ul>
				<li><a href="#">Prev</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">Next</a></li>
			</ul>
		</div>
	    <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   		<script type="text/javascript" src="showHide.js"></script>
    </body>
</html>