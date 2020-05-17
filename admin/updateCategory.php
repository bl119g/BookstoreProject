<?php
	require 'dbconnection.php';
	
	$categoryID = '';
	$categoryName = '';
	
	$categoryID = $_POST['categoryID'];
	$categoryName = $_POST['categoryName'];

	$sql = "Update Category_YB19937 set categoryName='$categoryName' where categoryID=$categoryID";
		
	$conn->query($sql);
	echo $sql;
	$conn->close();
	
	//server side redirect
	header('Location: displayCategory.php');
?>
