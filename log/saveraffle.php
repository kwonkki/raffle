<?php
	$timezone = "Asia/Manila";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

	/*
	 * STR : Print out the logs
	 */
	//		
	
	$winner = $_POST['winner'];
	$itemTitle = $_POST['itemTitle'];
	
	
	$input_save ="";
				
	$timeStamp = date("Y-m-d H:i:s");			
			
	
	$file = fopen('logs.html', "a+");
	fwrite($file, "<br>");
	fwrite($file, "##########################");
	fwrite($file, "<br>");
	fwrite($file, $itemTitle. " - " . $timeStamp);
	fwrite($file, "<br>");
	fwrite($file, $winner);
	fwrite($file, "##########################");
	fclose($file);
	/*
	 * END : Print out the logs
	 */
	 echo $itemTitle;

?>