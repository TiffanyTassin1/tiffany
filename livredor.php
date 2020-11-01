<?php
	$host="localhost"; //Add your SQL Server host here
	$user="tiffany1"; //SQL Username
	$pass="toto"; //SQL Password
	$dbname="livredor"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
	}
	$name=$_POST['nom_prenom'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$sql="INSERT INTO livredor(nom_prenom, email, message) VALUES('$nom_prenom','$email','$message')";
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	else
		echo "Values Stored in our Database!";
	mysqli_close($con);
?>
