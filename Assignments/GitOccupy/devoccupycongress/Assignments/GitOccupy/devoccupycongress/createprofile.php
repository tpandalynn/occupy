<!DOCTYPE html> 
<html>

<head>
	<title>OccupyCongress | Create a Profile</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 	


<?php
include("config.php");
?>
	<body>

<!-- Start of page: #createprofile -->
<div data-role="page" id="confirmupdate">
	<div data-role="header" data-theme="e">
			<h1>Create a Profile</h1>
	</div>


		<div data-role="content" data-theme="d">	
			<h2>Enter Your Information</h2>
			
			<form action="createprofile.php" method="post">
				<div data-role="fieldcontain">
					<p>Username: <input style="width:50%" name="username" id="username"/></p>
					<p>Password: <input style="width:50%" type="password" name="password" id="password"/></p>
					<p>Repeat Password: <input style="width:50%" type="password" name="rpassword" id="rpassword"/></p>
					<p>Zipcode: <input style="width:50%" name="zipcode" id="zipcode"/></p>
					<p>Party: </br>
					<select name="party">
					<option value="a">Democratic</option>
					<option value="b">Republican</option>
					<option value="c">Other</option>
					</select></p>
					
					<p>Age Range: </br>
					<select name="age">
					<option value="a">Under 21</option>
					<option value="b">21-25</option>
					<option value="c">26-30</option>
					<option value="c">31-35</option>
					<option value="c">36-40</option>
					<option value="c">41-45</option>
					<option value="c">46-50</option>
					<option value="c">51-55</option>
					<option value="c">56-60</option>
					<option value="c">61-65</option>
					<option value="c">Over 65</option>
					</select></p>
				
					<p><a href="#two" data-rel="back" data-role="button" data-inline="true" data-icon="back">Create!</a></p>	
			</form>
			
			

			<?php 
			$username = $_POST["username"];
			$password = $_POST["password"];
			$rpassword = $_POST["rpassword"];
			$zipcode = $_POST["zipcode"];
			$party = $_POST["party"];
			$age = $_POST["age"];
			
			$sql = "INSERT INTO c_cs147_misslynn.users ( username, password,zipcode, party, ageRange )". 
			"VALUES ".
			"( '$username', '$password','$zipcode', '$party','$age')";
			$result=mysql_query($sql);
			
			?>

			
			
			</div>
		</div>
</div>

<!-- /page createProfile -->

</body>
  