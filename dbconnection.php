<?php
//db connection file
$HostName= "studentdb-maria.gl.umbc.edu";
$UserName= "mcorpus1";
$Password= "mcorpus1";
$DataBase = "mcorpus1";

$conn = new mysqli($HostName, $UserName, $Password, $DataBase);

//check db conn
if(!$conn)
{
		die("Connection failed: " . mysqli_connect_error());
}
	//echo "Connected successfully!" . "<br>" . "<br>";
?>