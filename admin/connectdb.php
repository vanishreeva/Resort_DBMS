<?php  	

	//MySQLi(used to connect to database)
	$conn = mysqli_connect('localhost','vani','vani@123','resort');

	if(!$conn){
		echo 'Connection error:' . mysqli_connect_error(); //check connection
	}

?>