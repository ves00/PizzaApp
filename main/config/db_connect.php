<?php 

// connect to database
$conn = mysqli_connect('localhost', 'veselin', 'test1234', 'veselin_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>