<?php
$servername="yashu.mysql.database.azure.com"
$username="yashu"
$password="Sravs@24032003"
$databasename="realestatephp"
$con = mysqli_connect($servername,$username,$password,$databasename);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
