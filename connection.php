<?php
	if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
	}
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die('Error connecting to server :'.mysqli_error());
	}
	mysqli_select_db($con,"health assistant");

?>
