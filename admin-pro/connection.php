<?php
	$con = mysqli_connect('localhost','root','');	
	if(!$con)
	{
		die('Not Connected With Host.'.mysqli_error($con));
	}
    // else
    // {
    //     echo "Connected";
    // }
	$db = mysqli_select_db($con,'form');
	if(!$db)
	{
		die('Not Connected with DB.'.mysqli_error($con));
	}

?>