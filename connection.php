<?php

echo "getting text before connection page invoked <br>";


$mysql_host="localhost";
$mysql_user="id8407526_rgg";
$mysql_password="@Rgg#321";//empty password 
$linkk=mysqli_connect($mysql_host,$mysql_user,$mysql_password);

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_password)) 
	{
		die('connection is not successful from first');
	}
else
	{ 

		if(mysqli_select_db($linkk,'id8407526_registration',))
		{
			echo "connection successful";
		}

		else{
		die('connection is not successful from database');
		}
	}




?>