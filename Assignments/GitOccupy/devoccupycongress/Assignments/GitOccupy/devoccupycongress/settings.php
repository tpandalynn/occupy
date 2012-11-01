<!DOCTYPE html> 
<html>

<head>
	<title>OccupyCongress | Settings</title> 
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
	<!-- Start of page: #settings -->
	<div data-role="page" id="settings" data-add-back-btn="true">
  	<div data-role="header"  data-theme="b">
  		<h3>Settings</h3>
    </div>
    
    <div data-role="content">
    
    <?php
 
    $sql = "SELECT zipcode FROM c_cs147_misslynn.users where userID = 1 ";
	$result = mysql_query($sql);
	if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

	if($_POST['zip']){
    echo "<h2>Current Location: ".$_POST['zip']." Stanford, CA</h2>"; }
    else{
    echo "<h2>Current Location: ".mysql_result($result, 0)." Stanford, CA</h2>"; 
    }
    
    mysql_free_result($result);
    ?>

	<p>This means feedback is being sent to:
	<ul>
	<li>Sen. Barbara Boxer (D)</li>
	<li>Sen. Dianne Feinstein (D)</li>
	<li>Rep. Anna G. Eshoo (D)</li></ul></p>
	<img src="https://maps.googleapis.com/maps/api/staticmap?center=Stanford, CA&amp;zoom=14&amp;size=600x300&amp;markers=Madison, WI&amp;sensor=false" width="600" height="300" />

	<form method="post" action="settings.php">
	<div data-role="fieldcontain">
	<p>New Zip Code:
	<input style="width:50%" type="text" name="zip" id="zip" value=""/>
	<button data-inline="true">Update!</button></p>
	</form>
<?php

	$zip = $_POST['zip'];
	$sql="UPDATE c_cs147_misslynn.users SET zipcode='$zip' WHERE userID = 1";
	$result=mysql_query($sql);

	// if successfully updated. 
// 			if($result){
// 			echo "Successful";
// 			echo "<BR>";
// 
// 			}
// 
// 			else {
// 			echo "ERROR";
// 			}
?>
			
			
			</div>
			
			<button>or Update to Current Location</button>
			<br/><br/>
			<p><a href="updateinfo.php" data-role="button" data-rel="dialog" data-transition="pop">Update Your Information</a></p>
    </div>
  </div>
  <!-- /page settings -->
  
	
	
	
  </body>

  </html>