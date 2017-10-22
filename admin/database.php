<?php
	//connect to mysql
	$con=mysqli_connect("localhost","root","","genesis");

	//test conncetion
	if (mysqli_connect_errno()){
		echo "failed to connect ";
	}



