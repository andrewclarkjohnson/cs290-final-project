<?php
// error_reporting(E_ALL ); 
error_reporting(E_ALL ^ E_WARNING); 
// ini_set('display_errors', 1);
include 'log_functions.php';
include 'helper_var.php';
session_start();

	// if(isset($_SESSION["page"])) 
	// 						{
	// 							$page=$_SESSION["page"];
								
	// 						}
	// 						else
	// 						{
	// 							$_SESSION["page"]="intro";
	// 							$page = $_SESSION["page"];
	// 						}
	// 						var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	
 	<title>Classic Rock Album Track Challenge</title>
 	 
 	
 	 <script src="js/jquery-1.11.3.min.js"></script>
 	
<script type="text/javascript"></script> 
<script src="js/cs290finalproject.js"></script> 
<script src="dropzone/dropzone.js"></script>
 	
	<link href ="css/bootstrap.min.css" rel="stylesheet">
	<link href ="css/dropzone.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
 </head>
 <body>
<div id="page-container">

		<?php 
		display_topnav(); 
		display_header(); 
		?>
	<div class="container">
		<div class="row">
			

		
		
			<div class="col-md-8">
				<div id="top-panel-container" class="panel panel-default hide">
					<div class="panel-body" >
						<div id="message"></div>
						
						
					</div>
				</div>
			

			<div id="main-content-top" class="panel panel-default">
					<div class="panel-body" id="main-content">
						
						<?php 
						display_login();
						display_intro(); 
						
						display_quiz();

						// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
						
						?>
						<div id="add-tracks-area"></div>
					</div>
				</div>


			<div id="bottom-content" class="panel panel-default hide">
					<div class="panel-body" >
						<div id="extra-content">
<?php 
								// display_add_new_artist();	
								display_add_new_artist();
								?>	
						</div>
										
					</div>
				</div>




			


				


			</div>

			
			<div class="col-md-4">
				
				<div class="panel panel-default hide">
					<div class="panel-body" id="my-leaderboard">
					<?php 
						display_users_best();
					?>
						
						
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-body" id="alltime-leaderboad">
						<?php 
						display_alltime_best_scores();
					?>
					
						
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body" id="recent-leaderboard">
						<?php 
						display_5_most_recent_scores();
					?>
					
					</div>
				</div>
			</div>

		</div>

	</div>
<!-- 
		<div id="left-block"  class="col-md-3">
		</div>
		<div id="main-content">
			
		</div>
		<div id="right-block-container">
			
		</div>	 -->


	
	<script src="js/bootstrap.js"></script>
</body>
</html>