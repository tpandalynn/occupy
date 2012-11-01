

	<?php
	
	include("config.php");
	
	$result = mysql_query("select * from articles");
	
	$data;
	$counter = -1;
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	  $counter++;
	  
	  $data["ARTICLES"][$counter]["title"] = $row["title"];
	  $data["ARTICLES"][$counter]["source"] = $row["source"];
	  $data["ARTICLES"][$counter]["articleID"] = $row["articleID"];
	  $data["ARTICLES"][$counter]["date"] = $row["date"];
	  $data["ARTICLES"][$counter]["authors"] = $row["authors"];
	  $data["ARTICLES"][$counter]["articleText"] = $row["articleText"];
	  $data["ARTICLES"][$counter]["link"] = $row["link"];
	}
	
	
	
	
	$result = mysql_query("select * from comments order by numBumps desc");
	
	$data;
	$counter = -1;
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	  $counter++;
	  
	  $data["COMMENTS"][$counter]["commentID"] = $row["commentID"];
	  $data["COMMENTS"][$counter]["articleID"] = $row["articleID"];
	  $data["COMMENTS"][$counter]["comment"] = $row["comment"];
	  $data["COMMENTS"][$counter]["numBumps"] = $row["numBumps"];
	}
	
	
	
	echo json_encode($data);

	?>
		