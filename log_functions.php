<?php
session_start();
include("helper_var.php");
// include ('ImageResize.php');
// include("functions.php");



//////////////////////////////////////////////////////////////////////////////

if(isset($_REQUEST['action']))
{
	$action = $_REQUEST['action'];	
	
}
else
{
	$action="";
}


//////////////////////////////////////////////////////////////////////////////

if($action == 'update_add_album')
{
	display_add_album();
}



//////////////////////////////////////////////////////////////////////////////

function display_topnav() {
	// session_start();
	$loginbutton_class="";
	$create_account_class="";
	$logout_class="";
	$topnav_add_class="";
	$topnav_quiz_class="";
	?>
	<!-- Top NavBar -->
	<div class ="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="#" class="navbar-brand">Classic Rock Album Track Challenge</a>
			
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					
						<?php 
							// $username = $_SESSION("username");
							// echo("$username !");
							if(isset($_SESSION["username"])) 
							{
								$loginbutton_class="hide";
								$create_account_class="hide";
								
							}
							else 
							{
								$logout_class="hide";
								$topnav_add_class="hide";
								$topnav_quiz_class="hide";

							}
							
									
								
								echo ("

									
									<ul class='nav navbar-nav navbar-right'>
									<li id='topnav-login-button' class=$loginbutton_class >Log in</li>
									<li id='topnav-create-account-button' class='$create_account_class'>Create Account</li>
									
								
									<li id='topnav-logout-button' class='$logout_class'>Log out</li>
									<li id='topnav-add-new-button' class=' $topnav_add_class'>Add albums/tracks</li>
									<li id='topnav-quiz-button' class='$topnav_quiz_class'>Take quiz</li>
									<li id='topnav-intro-button' >Home</li>
									</ul>
									");

								
							?>
						

					
				</div>
		</div>
	</div>
	<?php
}


//////////////////////////////////////////////////////////////////////////////

function display_header() {

?>
<!-- Jumbotron -->
	<div class="container">
		<div class="row">
			<div class="jumbotron col-xs-12">
				<div class="col-xs-2">
					<img src="img/rock-guitar.png" height="60px" width="100%">
				</div>
				<div class="col-xs-10">
					<h2>Classic Rock Album Track Challenge</h2>
					<h3 class="small"><em>How well do you know your album tracks?</em></h4>
					
				</div>
				
			
			</div>
		</div>

	</div>
	<?php
}


//////////////////////////////////////////////////////////////////////////////

function display_intro() {
	?>
		<div id="main-intro" >
			<div class="logged-in-intro-message hide">
		
				<p>Now that you are logged in, you can test your classic rock knowledge of album tracks. Just click on the 'Quiz' link when you are ready. </p>
				<p></p>
				<p>Would you like to contribute to the site? All you have to do is click on 'Add Album/Tracks' and follow the instructions. </p>
				<p>Are you wondering why you might not be seeing some of your contributions? Basically, for a track to appear in a quiz, there must be at least 3 albums and at least 5 tracks by the artist. Add some more content and it should appear.</p>
			</div>
			<div class="logged-out-intro-message">

				<h3>Welcome to the Classic Rock Album Challenge!</h3>
				<p>How well do you know your classic rock? We'll find out, won't we!</p>
				<p>In the Classic Rock Album Challenge, you'll be presented with 10 random song titles and you need to choose which album by that artist it belongs to.</p>
				<p>I can hear you asking "Wicked. How do I get started?" Just follow the steps below.</p>
				<ol>
					<li>First, take a gander at the menu items in the top right corner. That's the main way to navigate.
					<li>If you haven't already, click the '<span class='create-account-link'>Create Account</span>' button in the top right corner and make your username and password.<br>
					(Or click the '<span class='log-in-link'>Log in</span>' in the top right corner if you already have an account)
					<li>After you're logged in, you'll be able to quiz yourself and even contribute new tracks to this site.
				</ol>	
				
			</div>
			

	

		</div>
	<?php
}


//////////////////////////////////////////////////////////////////////////////

function display_login() {
	?>
	<div id="main-login-container" class="hide">
		
		<div id="login-area" class="hide">
			<h3>Enter your Account Information</h3>
			<p>Username:  <input type="text" name="username" id="enter_username"/></p>
			<p>Password:  <input type="password" name="password" id="enter_password"/></p>
			<div class="btn  btn-default btn-success" id="submit-login">Submit</div>
		</div>
		<div id="create-account-area" class="hide">
			<h3>Create your Account</h3>
			<div class="alert alert-info" role="alert">Usernames and passwords must be between 3 and 15 characters.<br>
				Usernames and passwords can only contain letters and numbers</div>
			<p>Enter Username:  <input type="text" name="username" id="create_username"/></p>
			<p>Enter Password:  <input type="password" name="password" id="create_password"/></p>
			<div class="btn  btn-default btn-warning" id="submit-account">Submit</div>
		</div>
		
	</div>
	
	<?php
}



//////////////////////////////////////////////////////////////////////////////



function display_add_new_artist() {
	echo("
	<div id='add-artist'><h3>Add new artist</h3>
			<p>Artist:  <input type='text' name='artist_name' id='enter_artist_name' size='40' /></p>
			<p>*Alternative:  <input type='text' name='artist_alternative_name' id='enter_artist_alternative' size='70'/></p>
			<p>*<small>Optional. An artist and the alternative are, as far as quizzing your classic rock knowledge on this site, are the same. For example, 
			'Bruce Springsteen' and 'Bruce Springsteen and the E Street Band' are considered the same. Also, 'John Cougar Mellencamp' and 'John Mellencamp' are considered the same.</small></p> 
			
			<p >Add artist image:</p>
			<form action='upload.php'
			      class='dropzone'
			      id='my-awesome-dropzone'>
			      </form>
			<div class='btn  btn-default btn-success' id='submit-artist'>Add</div>
			
		</div>
		");
}


//////////////////////////////////////////////////////////////////////////////



function display_quiz() {
	
	?>
		<div id="main-quiz-container" class='hide'>
		</div>
	<?php
}


//////////////////////////////////////////////////////////////////////////////


function display_users_best() {
	// session_start();
	include 'helper_var.php';

	if (isset($_SESSION['user_id']))
	{


	$user_id = $_SESSION['user_id'];
	$username = $_SESSION['username'];
	
	echo("<h3 class='leaderboard'>$username's Leaderboard</h3>");
	
	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
			// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
				if ($mysqli->connect_errno) {
			    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				else 
				{

					

					//////
					$get_user_statement = $mysqli->prepare("SELECT score, quiz_date FROM quiz_scores WHERE user_id =  $user_id ORDER BY score DESC LIMIT 5");
					// $get_user_statement->bind_param('i', $user_id);
					$get_user_statement->execute(); 
					$get_user_statement->bind_result($score, $quiz_date);
					
					$get_user_statement->store_result();
					$num_existing_records = $get_user_statement->num_rows;

				

						if ($num_existing_records ==0)
						{
							echo ("You haven't taken any quizzes yet.");
						}
						else
						{
							echo("
							<div class='table-responsive'>
    							<table class='table table-bordered table-striped'>
    								<thead>
        								<tr>
         								 <th>Score</th>
         								 <th>Date</th>
      								</thead>
      								<tbody>
    				");
    				// $result = $stmt->get_result();
    				

								while ($get_user_statement->fetch()) 
								{
									echo("
									
										<tr>
											<td>
											");
												// $score = $score;
												echo("$score");
											echo("	
											</td>
										
											<td>
												");
												// $date = $row['quiz_date'];
												echo ($quiz_date);
												// echo("$date");
											echo("	
											</td>
										</tr>");
										
								}
								
								echo("
							</tbody>
						</table>
					</div>");
								
						
					
				// 		}
				// $stmt->close();
				}
			}	


	}			
}


//////////////////////////////////////////////////////////////////////////////



function display_alltime_best_scores() {
	
	include 'helper_var.php';
	echo("<h3 class='leaderboard'>All Time Leaderboard</h3>");
	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
			// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
				if ($mysqli->connect_errno) {
			    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				else 
				{
					$get_statement = $mysqli->prepare("SELECT username, score, quiz_date FROM quiz_scores q INNER JOIN users u   ON q.user_id = u.user_id ORDER BY score DESC, quiz_date DESC LIMIT 5 ");
					// $get_statement->bind_param('i', $user_id);
					$get_statement->execute(); 
					$get_statement->bind_result($username, $score, $quiz_date);
					
					$get_statement->store_result();
					$num_row = $get_statement->num_rows;

					// if($result=$mysqli->query("SELECT * FROM quiz_scores q INNER JOIN users u   ON q.user_id = u.user_id ORDER BY score DESC, quiz_date DESC LIMIT 5 "))

					// if ($result = $mysqli->query("SELECT * FROM quiz_scores ORDER BY score DESC, quiz_date DESC LIMIT 5")) 
					// {
						// $num_row = mysqli_num_rows($result);
						if ($num_row==0)
						{
							echo ("No quizzes have been taken yet.");
						}
						else
						{
							?>
							<div class="table-responsive">
    							<table class="table table-bordered table-striped">
    								<thead>
        								<tr>
         								 <th>User</th><th>Score</th>
         								 <th>Date</th>
      								</thead>
      								<tbody>
    	<?php 
								while ($get_statement->fetch()) 
								{
									?>
									
										<tr>
											<td>
											<?php
												// $username = $row['username'];
												echo("$username");
											?>	
											</td>
											<td>
											<?php
												// $score = $row['score'];
												echo("$score");
											?>	
											</td>
										
											<td>
												<?php
												// $date = $row['quiz_date'];
												echo ($quiz_date);
												// echo("$date");
											?>	
											</td>
										</tr>
										<?php	
								}
								?>
							</tbody>
						</table>
					</div>
								<?php
						// }
					}
				}	
}


//////////////////////////////////////////////////////////////////////////////



function display_5_most_recent_scores() {
	include 'helper_var.php';
	echo("<h3 class='leaderboard'>Most Recent Leaderboard</h3>");
	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
			// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
				if ($mysqli->connect_errno) {
			    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				else 
				{


					$get_statement = $mysqli->prepare("SELECT username, score, quiz_date FROM quiz_scores q INNER JOIN users u   ON q.user_id = u.user_id ORDER BY  quiz_date DESC LIMIT 5 ");
					// $get_statement->bind_param('i', $user_id);
					$get_statement->execute(); 
					$get_statement->bind_result($username, $score, $quiz_date);
					
					$get_statement->store_result();
					$num_row = $get_statement->num_rows;
					// if($result=$mysqli->query("SELECT * FROM quiz_scores q INNER JOIN users u   ON q.user_id = u.user_id ORDER BY quiz_date DESC LIMIT 5 "))

					// // if ($result = $mysqli->query("SELECT * FROM quiz_scores ORDER BY score DESC, quiz_date DESC LIMIT 5")) 
					// {
						// $num_row = mysqli_num_rows($result);
						if ($num_row==0)
						{
							echo ("No quizzes have been taken yet.");
						}
						else
						{
							?>
							<div class="table-responsive">
    							<table class="table table-bordered table-striped">
    								<thead>
        								<tr>
         								 <th>User</th><th>Score</th>
         								 <th>Date</th>
      								</thead>
      								<tbody>
    	<?php 
								while ($get_statement->fetch()) 
								{
									?>
									
										<tr>
											<td>
											<?php
												// $username = $row['username'];
												echo("$username");
											?>	
											</td>
											<td>
											<?php
												// $score = $row['score'];
												echo("$score");
											?>	
											</td>
										
											<td>
												<?php
												// $date = $row['quiz_date'];
												echo ($quiz_date);
												// echo("$date");
											?>	
											</td>
										</tr>
										<?php	
								}
								?>
							</tbody>
						</table>
					</div>
								<?php
						// }
					}
				}	
}





////////////////////////////////////////////////////////////////////////////////

if ($action=='logout') {
	$_SESSION=array();
	$score=0;
	$qs_attempted=0;
	session_destroy();
	echo("loggedout");
	header('url:index.php');
}


////////////////////////////////////////////////////////////////////////////////

if ($action=='create_account') {
		
	$name = $_REQUEST["name"];
	$password = $_REQUEST["pass"];
	if ((strlen($name) >2 ) && (strlen($name) <16 ) && (strlen($password) >2 ) && (strlen($password) <16 ))
	{
		// check name and password are only letters and numbers
		if ( (ctype_alnum($name)) && (ctype_alnum($password)) )
		{
			// passes check for valid name and password
			// next check if name already exists in database
			$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
			{
			// if ($result = $mysqli->query("SELECT * FROM users WHERE username = 'andy'")) {
////////////

					$statement = $mysqli->prepare("SELECT * FROM users WHERE username =  ? ");
					$statement->bind_param('s', $name);
					$statement->execute(); 
					// $get_user_statement->bind_result($score, $quiz_date);
					
					$statement->store_result();
					$num_row = $statement->num_rows;
				///////
				// if ($result = $mysqli->query("SELECT * FROM users WHERE username = '".$name."'")) 
				// {
	    	
			 //    	// echo("hey<br>");
			    	// $row = $result->fetch_assoc();
			 //    	// echo($row['password']);
			    	// $num_row = mysqli_num_rows($result);
			    	// echo($num_row);
				    	if ($num_row == 0)
				    	{
				    		$password =md5($password);
				    		// -- $new_insert=$mysqli->query ("INSERT INTO users (username, password, last_login) VALUES ('$name', '$password',UTC_TIMESTAMP())");
					    	$statement = $mysqli->prepare("INSERT INTO users (username, password, last_login) VALUES (?, ?, UTC_TIMESTAMP())");
							$statement->bind_param('ss', $name,  $password);
							$statement->execute(); 

					    	$user_id =$mysqli->insert_id;
					    	$_SESSION['user_id'] = $user_id ;
							$_SESSION['username'] =$name;
					    	display_users_best();

					    }
					    else
					    {
					    	// username already exists

					    		echo("username_taken");
					    }


				// }
			}

		}
		else
		{
			echo ("non_alphanumeric");
		}

	}
	else
	{
		echo("too_short");
	}
		
		

	
}

////////////////////////////////////////////////////////////////////////////////


if ($action=='check_login') {

	$name = $_REQUEST["name"];
	$password = $_REQUEST["pass"];
	$password = md5($password);

	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		if ($mysqli->connect_errno) {
	    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else 
		{
		// if ($result = $mysqli->query("SELECT * FROM users WHERE username = 'andy'")) {
			if ($result = $mysqli->query("SELECT * FROM users WHERE username = '".$name."'")) 
			{
    	
		    	// echo("hey<br>");
		    	$row = $result->fetch_assoc();
		    	// echo($row['password']);
		    	$num_row = mysqli_num_rows($result);
		    	// echo($num_row);
			    	if ($num_row == 1)
			    	{
			    		$saved_password = $row['password'];
			    		if ($saved_password==$password)
				    	{
				    		// $user_id =$row['user_id'];
				    		
				    		$_SESSION['username']=$row['username'];
				    		$_SESSION['user_id']=$row['user_id'];
				    		display_users_best() ;
				    	}
				    	else
				    	{
				    		echo("wrong_password");
				    	}	

				    }
		    		else 
		    		{
		    			echo("username_not_found");
		    		}

			}
		
		    /* free result set */
  	 	 $result->close();
	}

		
}



//////////////////////////////////////////////////////////////////////////////



if($action=='display_artist_list')
{
	display_artist_list();
}




//////////////////////////////////////////////////////////////////////////////


function display_artist_list() {
include("helper_var.php");
	?>
<div id="add-album-intro" >

			<?php

			$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
			// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
				if ($mysqli->connect_errno) {
			    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				else 
				{
					if ($result = $mysqli->query("SELECT * FROM artists ORDER BY artist_name ASC")) 
					{
						$num_row = mysqli_num_rows($result);
						echo("<div class='panel'>");
						if ($num_row==0)
						{
							echo ("There aren't any artists right now. Would you like to add one?");
						}
						else
						{
							echo ("<h3>Choose existing artist</h3>");
							echo ("<p>Choose an artist to see what albums have tracks already entered or add a new album</p> ");
							echo("<select name='choose_artist' id='choose_artist'  class='form-control'>");
							echo("<option value='none'>-</option>");
							while ($row = $result->fetch_assoc()) 
							{
								$artist_name=$row['artist_name'];
								$artist_alt_name=$row['alternative_name'];
								$artist_id=$row['artist_id'];
								if (is_null($row['alternative_name']) || empty($row['alternative_name']))
								{
									$artist_display = $artist_name;
								}
								else 
								{
									$artist_display = $artist_name . " | " . $artist_alt_name;
								}
								echo("<option value='$artist_id' >$artist_display</option>");

							}	
							echo("</select>");
							echo("<br>");
							echo ("<p>Or you can add a new artist below.</p>");
							echo("</div>");
						}
					}
				}
		?>
			
		</div>
		<?php
	}



//////////////////////////////////////////////////////////////////////////////




if ($action=='add_new_artist') {
		
	$artist = $_REQUEST["artist"];
	$alternative = $_REQUEST["alternative"];
	$artist_image = $_REQUEST["image"];
	// echo("artist_image ::  $artist_image");
	if (($artist_image="") || (empty($artist_image)))
	{
		$artist_image="rock_star_silhouette.jpg";
	}
	if ($artist=="")
	{
		echo("artist not supplied");
	}
	else
	{


			// passes check for valid name and password
			// next check if name already exists in database
			$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
			{
			     // check that artist doesn't already exist
				if ($result = $mysqli->query("SELECT * FROM artists WHERE artist_name = '".$artist."'")) 
				{
	    	
			 //    	// echo("hey<br>");
			    	$row = $result->fetch_assoc();
			 //    	// echo($row['password']);
			    	$num_row = mysqli_num_rows($result);
			    	// echo($num_row);
				    	if ($num_row == 0)
				    	{
				    		// check alternative name
				    		if ($alt_result = $mysqli->query("SELECT * FROM artists WHERE artist_name = '".$alternative."'")) 
				    		{

			    				$alt_row = $result->fetch_assoc();
			    				$num_alt_row = mysqli_num_rows($result);
			    				if ($num_alt_row == 0)
			    				{


			    					// $new_insert=$mysqli->query ("INSERT INTO artists (artist_name, alternative_name, img) VALUES ('$artist', '$alternative','$artist_image')");
									$statement = $mysqli->prepare("INSERT INTO artists (artist_name, alternative_name, img) VALUES (?, ?, ?)");
									$statement->bind_param('sss', $artist, $alternative,  $artist_image);
									$statement->execute(); 
									$artist_id =$mysqli->insert_id;
									display_artist_list();
									echo("|||");
									display_albums($artist_id);
					    			// display_add_album2();


			    				}
			    				else 
			    				{
			    					// artist already exists

					    			echo("artist_already_exists");
			    				}
				    		}
							
				    		
					    }
					    else
					    {
					    	// artist already exists

					    		echo("artist_already_exists");
					    }


				}
			}

		
		}
		    /* free result set */
  	 	 // $result->close();
  	 	 // $alt_result->close();
	
}


//////////////////////////////////////////////////////////////////////////////





function display_albums($artist_id)
{
// echo("artist_id: $artist_id<br>");
include("helper_var.php");
			// passes check for valid name and password
			// next check if name already exists in database
		 	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// // // echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
		{
			$artist_result=$mysqli->query("SELECT * FROM artists WHERE artist_id = '".$artist_id."'");
		 			    		$artist_row = $artist_result->fetch_assoc();
		 			    		$artist_name=$artist_row['artist_name'];
		 			    		echo("<h3>$artist_name</h3>");
		     // check that artist doesn't already exist
			// echo("artist_id ::  $artist_id<br>");
				if ($result = $mysqli->query("SELECT * FROM albums WHERE artist_id = '".$artist_id."' ORDER BY album_year ASC")) 
				{
	    	
			 //    	// echo("hey<br>");
		    	// $row = $result->fetch_assoc();
			 //    	// echo($row['password']);
			    	$num_row = mysqli_num_rows($result);
			    	// echo($num_row);
				    	if ($num_row > 0)//other albums by artist exist
				    		
				    	{
				    		echo("<p>Click on an album to see/edit its tracks. Click again to close the tracks.</p>");
				    		$i=0;
		 	    				while ($row = $result->fetch_assoc()) 
									{
		 								$album_id=$row['album_id'];
		 								if ($tracks_result = $mysqli->query("SELECT * FROM tracks WHERE album_id = '".$album_id."'")) 
										{
											$num_tracks = mysqli_num_rows($tracks_result);
										}
										$div_id="album".$i;
										$close_id="close".$i;
		 								$album_name=$row['album_name'];

		 								echo("<div id='$div_id' class='album_name_container' value='$i'>
		 									<div class='album_name' value='$album_id'><h3>$album_name <span class='badge'>$num_tracks</span></h3></div>
		 									<div class='add_track_space' class='hide'></div>
		 									
		 									</div>
		 									<div id='$close_id'class='hide_track_area_button hide'>Close Track Window</div>
		 									</div><br>");
		 								$i++;
									}	
						    		
							
				    		
		 			    }
		 			    else
		 			    {
		 			    	echo("<p><span class='alert alert-info' role='alert'>No albums exist for $artist_name currently.</span></p>");
		 			    }
		 			    
		// // 			    	// artist already exists
		 			    
		 			    echo("<input type='hidden' id='artist_id' value=$artist_id>");
		 			    ?>
		 			    		<p>Enter Album Name:  <input type='text' name='album_name' id='enter_new_album' size='40'/></p>
								<p>Enter Album Year:  <input type='text' name='album_year' id='enter_album_year' size='5'/></p>
								<?php echo("<div class='btn  btn-default btn-success' id='add-new-album'>Submit Album</div>");
								// <!-- <span id='add-new-album'>Submit Album</span> -->
								
		 			    		// add_tracks_form($artist_id, $album_id);

		 	


		 		}
		 	}

}



//////////////////////////////////////////////////////////////////////////////



	
if ($action =='add_new_album') {
		
	$artist_id = $_REQUEST["artist_id"];
	// echo("hello");
	display_albums($artist_id);
	
}


//////////////////////////////////////////////////////////////////////////////




if ($action =='add_new_album_to_database')
{

    $artist_id=$_REQUEST["artist_id"];
    $album_name=$_REQUEST["album_name"];
    $album_year=$_REQUEST["album_year"];
    $album_year = (int) $album_year;

    if ( ($album_year < 1950 ) || ($album_year > 2015))  // THIS WOULD BE BETTER IF YEAR WAS TAKEN FROM DATE FUNCTION
    {
    	echo("invalid date");
    }
    else
if ($album_name == "")
{
    	echo("empty title");
    }
    else
    {



    $mysqli = new mysqli($db_host, $db_username, $db_password, $database);
	$album_name = $mysqli->real_escape_string($album_name);
	$album_year = $mysqli->real_escape_string($album_year);

			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
		{
	// $new_insert=$mysqli->query ("INSERT INTO albums (artist_id, album_name,album_year) VALUES ('$artist_id', '$album_name','$album_year')");
	$statement = $mysqli->prepare("INSERT INTO albums (artist_id, album_name,album_year) VALUES ( ?, ?, ?)");
						$statement->bind_param('isi', $artist_id, $album_name, $album_year);
						$statement->execute(); 

	$album_id=$mysqli->insert_id;


	$get_albums_statement = $mysqli->prepare("SELECT * FROM albums WHERE artist_id = ?");
	$get_albums_statement->bind_param('i', $artist_id);
	$get_albums_statement->execute(); 
	$get_albums_statement->store_result();
	$num_existing_albums = $get_albums_statement->num_rows;
	// echo("num exisiting albums: $num_existing_albums <br>");
			// $get_albums_statement->close();    	




	$stmt = $mysqli->prepare("UPDATE artists SET num_entered_albums = ? WHERE artist_id = ?");
					$stmt->bind_param('ii', $num_existing_albums, $artist_id);
  
					$stmt->execute(); 
					$stmt->close();
	}
	display_albums($artist_id);
          
           }
}
		//     /* free result set */
  	 	 // $result->close();
  	 	 // $artist_result->close();
	

//////////////////////////////////////////////////////////////////////////////



if ($action =='add_tracks')
{
	$album_id = $_REQUEST["album_id"];
	add_tracks_form ($album_id);
}

//////////////////////////////////////////////////////////////////////////////////

if ($action =='add_tracks_to_database')
{

	// echo("$artist_id ::  $artist_id<br>");
	$artist_id = $_REQUEST["artist_id"];
	$album_id = $_REQUEST["album_id"];

	$track1=$_REQUEST["track1"];
	$track2=$_REQUEST["track2"];
	$track3=$_REQUEST["track3"];
	$track4=$_REQUEST["track4"];
	$track5=$_REQUEST["track5"];



	

	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
	$album_name = $mysqli->real_escape_string($album_name);
	$track1 = $mysqli->real_escape_string($track1);
	$track2 = $mysqli->real_escape_string($track2);
	$track3 = $mysqli->real_escape_string($track3);
	$track4 = $mysqli->real_escape_string($track4);
	$track5 = $mysqli->real_escape_string($track5);


			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
			{
				$num_new_tracks = 0;
				 // echo("******".$track1 );
			for ($i=1; $i<=5; $i++)
			{
				$trk="track".$i;	
				// echo("track $i: $trk :: ".$$trk ."<br>");
				$track_name=$$trk;

				if (!empty($$trk))
					{
						$num_new_tracks++;
						// -- $track_insert=$mysqli->query ("INSERT INTO tracks (album_id, track_name) VALUES ('$album_id', '$track_name')");
						$statement = $mysqli->prepare("INSERT INTO tracks (album_id, track_name) VALUES ( ?, ?)");
						$statement->bind_param('is', $album_id, $track_name);
						$statement->execute(); 
					}

			}
			// $track_result=$mysqli->query("SELECT * FROM tracks WHERE album_id = '".$album_id."'");
			// 	$track_row = $track_result->fetch_assoc();
			// 	$num_tracks=$track_row->num_rows;




$track_statement = $mysqli->prepare("SELECT * FROM tracks WHERE album_id = ?");
					$track_statement->bind_param('i', $album_id);
					$track_statement->execute(); 
					// 
					
					$track_statement->store_result();
					$num_tracks = $track_statement->num_rows;


			$album_result=$mysqli->query("SELECT * FROM albums WHERE album_id = '".$album_id."'");
				$album_row = $album_result->fetch_assoc();
				$album_name=$album_row['album_name'];

			$track_result=$mysqli->query("SELECT * FROM artists WHERE artist_id = '".$artist_id."'");
				$row = $track_result->fetch_assoc();
	$num_prior_tracks=$row['num_entered_tracks'];
	// $album_name=$row['album_name'];
	// echo("num_prior_tracks: $num_prior_tracks <br>");
	$new_num_tracks=$num_prior_tracks + $num_new_tracks;
	// echo("num exisiting tracks: $num_existing_tracks <br>");
			// $get_tracks_statement->close();    	




	$stmt = $mysqli->prepare("UPDATE artists SET num_entered_tracks = ? WHERE artist_id = ?");
					$stmt->bind_param('ii', $new_num_tracks, $artist_id);
  
					$stmt->execute(); 
					$stmt->close();

		}
		add_tracks_form ($album_id)	;
		echo ("|||");
		echo("<h3> $album_name <span class='badge'>$num_tracks</span></h3>");
	//     /* free result set */
  	 	 // $new_insert->close();
  	 	 // $track_insert->close();
	
	
}

//////////////////////////////////////////////////////////////////////////////




if ($action =='update_track')
{
	$track_id=$_REQUEST["track_id"];
	$track_name=$_REQUEST["track_name"];
	$track_listing_number=$_REQUEST["track_listing_number"];
	

	// echo($track_id);
	// list($track_id, $track_name) = explode('@', $track_info);
	echo("<p>Track #$track_listing_number: 
		
		<input type='text' name='$track_id' class='update_track_id' value='$track_name' size='40'/></input> 
		<span class='btn  btn-default btn-success update-track-in-database'  value='$track_id'>Update</span></p>
		");
		

}


//////////////////////////////////////////////////////////////////////////////



if ($action =='update_track_in_database')
{
	// echo ("hello***");
	$track_id=$_REQUEST["track_id"];
	$track_name=$_REQUEST["track_name"];
	$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
	if ($mysqli->connect_errno) {
			    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				else 
				{


//*****MAKE ALL DATABASE CALLS LIKE THIS OR I WILL LOSE POINTS
					// echo($track_name.", ". $deep_cut_flag.", ".  $track_id);
					$stmt = $mysqli->prepare("UPDATE tracks SET track_name = ? WHERE track_id = ?");
					$stmt->bind_param('si', $track_name, $track_id);
  
					$stmt->execute(); 
					$stmt->close();
				/****************************************/	
				}
				$track_result=$mysqli->query("SELECT * FROM tracks WHERE track_id = '".$track_id."'");
				$row = $track_result->fetch_assoc();
				$album_id=$row['album_id'];
		add_tracks_form ($album_id)		;
}

//////////////////////////////////////////////////////////////////////////////



if ($action == 'generate_quiz')
{
		
			$_SESSION["score"] = 0; 
		
			$_SESSION["questions_attempted"] = 0; 
		
		$num_quiz_questions = 10;

		// echo("QUIZ");
		$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// // // echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
		if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
		else 
			{
				$eligible_artist_array = array();
				$eligible_tracks_array = array();
				$quiz_array = array();
				$artists_in_quiz = array();
			$artist_result=$mysqli->query("SELECT * FROM artists WHERE num_entered_albums > 2 AND num_entered_tracks > 4");
			
				while ($row = $artist_result->fetch_assoc()) 
				{
					$eligible_artist_array[] = $row['artist_id'];

				}
			// var_dump($eligible_artist_array);
			// echo("<BR><BR>");


				foreach($eligible_artist_array as $this_eligible_artist)
				{
					$track_album_result=$mysqli->query("SELECT * FROM albums a INNER JOIN tracks t      ON a.album_id = t.album_id WHERE a.artist_id = $this_eligible_artist");
				while ($row = $track_album_result->fetch_assoc()) 
								{
									$eligible_tracks_array[] = $row['track_id'];

								}
				}


				// var_dump($eligible_tracks_array);
				$number_of_eligible_tracks=count($eligible_tracks_array);
				// echo("NUmber of eligible tracks: $number_of_eligible_tracks <br>");
				if ($number_of_eligible_tracks <10)
				{
					echo ("not enough questions");
				}
				else
				{
					
					
					// create array of 10 tracks for quizzing  -- this will ensure no duplicates
					$count_of_indexes_to_quiz = 0;
					$max_index = $number_of_eligible_tracks-1;
					while ($count_of_indexes_to_quiz < $num_quiz_questions)
					{
						$array_indexes_to_quiz[]=mt_rand(0,$max_index);

						$array_indexes_to_quiz = array_unique($array_indexes_to_quiz);
						$count_of_indexes_to_quiz = count($array_indexes_to_quiz);
					}
					
// 					// var_dump($array_indexes_to_quiz);

					
// 					// get all the raw content for the 10 tracks to quiz
					foreach($array_indexes_to_quiz as $current_index)
					{
						$current_track_id = $eligible_tracks_array[$current_index];
						// echo(" $current_track  SELECT * FROM tracks WHERE track_id = '".$current_track."'");
						$new_track_album_result=$mysqli->query("SELECT * FROM albums a INNER JOIN tracks t ON a.album_id = t.album_id  WHERE t.track_id = '$current_track_id'");
						// $new_track_album_result=$mysqli->query("SELECT * FROM tracks WHERE track_id = '".$current_track."'");
						// $new_track_album_result=$mysqli->query("SELECT * FROM tracks WHERE track_id = '7'");
						$row = $new_track_album_result->fetch_assoc();
						// var_dump($row);
						$track_name = $row['track_name'];
						$album_id = $row['album_id'];
						$artist_id = $row['artist_id'];
						// echo("* $track_name <br>");
						$quiz_array[] = array("artist"=>$artist_id, "album"=>$album_id, "track_id"=>$current_track_id, 
							"track_name"=>$track_name);
						$artists_in_quiz[]=$artist_id; 
					}

// 					// make array of all albums by artists in quiz
					$artists_in_quiz = array_unique($artists_in_quiz);
					// var_dump($artists_in_quiz);
					$albums_by_artist_array=array();
					$artist_details_array=array();
					// echo("<br><br>");
					foreach($artists_in_quiz as $current_artist)
					{
						$albums_by_artist_array[$current_artist] = array(); 
						// echo("SELECT * FROM albums WHERE artist_id = $current_artist");
						$artist_result=$mysqli->query("SELECT * FROM artists WHERE artist_id = '$current_artist'");
						$artist_row = $artist_result->fetch_assoc();
							
								

						

						$album_result=$mysqli->query("SELECT * FROM albums WHERE artist_id = '$current_artist' ORDER BY album_year ASC");
						
							$album_names=[];// reset the array each time before while loop
							while ($album_row = $album_result->fetch_assoc()) 
							{
								$album_names[] = array('album_name'=>$album_row['album_name'], 'album_id'=>$album_row['album_id']);

							}
							$albums_by_artist_array[$current_artist] = array("artist_name"=>$artist_row['artist_name'], "artist_image"=>$artist_row['img'],"albums"=>$album_names);
							
							// $albums_by_artist_array[$current_artist]=;
							
					}
					// var_dump(($albums_by_artist_array));
					// echo("<br><br>");
					// display quiz
					$i=1;
					foreach ($quiz_array as $this_question_content)
					{
						$array_id=$i-1;
						$correct_answer_id=$this_question_content['album'];
						$artist_id = $this_question_content['artist'];
						// var_dump ($this_question_content);
						// echo("<br>");
						echo("<div class='question_container panel' value='$array_id'>");
						echo("<span class='question_number' value='$i'><strong>#$i) </strong></span>");
						$image_url="img/".trim($albums_by_artist_array[$artist_id]["artist_image"]);
						// $thumbnailimage=resizeImage($image_url, 100, 100);
						echo("<span class='artist_image'><img src='".$image_url."' width='100' height='100'></span>");
						// echo("<span class='artist_image'>");
						// imagejpeg($thumbnailimage);
						// echo("</span>");
						$this_track_name=$this_question_content['track_name'];
						// echo("<span class='question_track_name'></span>");
						echo("<span class='question_album_choices dropdown'><p class='question_track_name'>$this_track_name</p>");
						echo("<select class='form-control'>");
						
						// echo("art_id: $artist_id : ");

	


						echo("<option>-choose-</option>");
						foreach($albums_by_artist_array[$artist_id]['albums'] as $this_album)
						{
							$this_album_name=$this_album['album_name'];
							$this_album_id=$this_album['album_id'];	
							echo("<option value='$this_album_id'>$this_album_name</option>");
						}
						echo("</select>");

						echo("</span>");
						echo("<span class='results_container' value='$correct_answer_id'>");
						echo("<span class='btn  btn-default btn-success submit-quiz-question'  value='$array_id'>Check</span>");
						echo("</span>");
						echo("</div>");
						$i++;
					}

					// echo("<div class='btn  btn-default btn-success add-new-tracks'  value='$album_id'>Submit Form</div>");
// var_dump($albums_by_artist_array);
					// var_dump($artists_in_quiz);
				}
		}
}


//////////////////////////////////////////////////////////////////////////////



if ($action=='check_answer')
{
	
   $user_answer = $_REQUEST['user_answer'];
   $correct_answer = $_REQUEST['correct_answer'];
   $question_num = $_REQUEST['question_num'];
$_SESSION["questions_attempted"]++;

$questions_attempted = $_SESSION["questions_attempted"];
	if ($user_answer == $correct_answer)
	{
		echo("<img src = 'img/green-check.jpg'>");
		$_SESSION['score']++;

	}
	else
	{
		echo("<img src = 'img/red-x.png'>");
	}
	$score=$_SESSION['score'];
	echo("<span class='current_score' value='$score'></span>"); 
	echo("<span class='qs_attempted' value='$questions_attempted'></span>"); 


	if ($questions_attempted == 10) // save user's score in database
	{
			$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
			{
				$user_id=$_SESSION['user_id']; 
				// $new_insert=$mysqli->query ("INSERT INTO quiz_scores (user_id, quiz_date, score) VALUES ('$user_id', UTC_TIMESTAMP(), '$score')");
				// $time_stamp = UTC_TIMESTAMP();
				// $time_stamp = "today";
				$statement = $mysqli->prepare("INSERT INTO quiz_scores (user_id, quiz_date, score) VALUES (?, UTC_TIMESTAMP(), ?)");
				$statement->bind_param('ii', $user_id,  $score);
				$statement->execute(); 
				//update leaderboard code 
				echo("|||");
				display_users_best();
				echo("|||");
				display_alltime_best_scores();
				echo("|||");
				display_5_most_recent_scores();

				
			}

	}
}

//////////////////////////////////////////////////////////////////////////////





function add_tracks_form ($album_id)
{
include("helper_var.php");
$mysqli = new mysqli($db_host, $db_username, $db_password, $database);
		// // // echo ("$db_host ::  user: $db_username  ; db_password :::: database:: $database <br>");
			if ($mysqli->connect_errno) {
		    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			else 
			{

				$artist_result=$mysqli->query("SELECT * FROM albums WHERE album_id = '".$album_id."'");
				
				$row = $artist_result->fetch_assoc();
				$artist_id=$row['artist_id'];


				$track_result=$mysqli->query("SELECT * FROM tracks WHERE album_id = '".$album_id."'");
			

			    	$num_existing_tracks = mysqli_num_rows($track_result);
			    	// echo("***# existing tracks: $num_existing_tracks *** <br>");
				echo("
		 			    			
		 			    	<div class='add_tracks_container'>
		 			    	<input type='hidden' name='artist_id' value= '$artist_id'>
		 			    		<input type='hidden' value='$album_id' class='tracks_album_id' name='tracks_album_id'/>");
				$i=1;
				while ($row = $track_result->fetch_assoc()) 
				{
					$track_name=$row['track_name'];
					// echo("...$track_name<br>");
					$track_id=$row['track_id'];

					echo("<div class='track_listing' value='$track_id'><p>Track #$i: $track_name <span class='glyphicon glyphicon-pencil' value='$track_name'></span></p></div>");
					
					$i++;
				}
			}

			for ($j=1; $j<=5; $j++)
			{
				$track_id="album".$album_id."-".$j;
				// $dcf_id="dcf".$album_id."-".$j;
				echo("<p>Track #$i: <input type='hidden' name='artist_id' value='$artist_id'><input type='text' name='$track_id' id='$track_id' size='40'/> </p>");
				$i++;
			}
			echo("
				<div class='btn  btn-default btn-success add-new-tracks'  value='$album_id'>Add Tracks</div>
				</div>");

		
	}


?>