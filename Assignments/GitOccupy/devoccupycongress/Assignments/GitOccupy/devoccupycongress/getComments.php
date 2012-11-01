

	<?php
	
	include("config.php");
	
	$result = mysql_query("select * from comments");
	
	$data;
	$counter = -1;
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	  $counter++;
	  
	  $data[$counter]["commentID"] = $row["commentID"];
	  $data[$counter]["articleID"] = $row["articleID"];
	  $data[$counter]["comment"] = $row["comment"];
	  $data[$counter]["numBumps"] = $row["numBumps"];
	}
	
	
	
	
	
	
	
	
	echo json_encode($data);

	?>
		