<?php
	require 'dbconnection.php';
	
	$categoryName = '';
	
	$categoryName = $_POST['categoryName'];

	$sql = "INSERT INTO Category_YB19937 (categoryName)
		VALUES
		('$categoryName')";
		
	$conn->query($sql);
	echo $sql;
	$conn->close();
	
	//server side redirect
	header('Location: displayCategory.php');
?>
