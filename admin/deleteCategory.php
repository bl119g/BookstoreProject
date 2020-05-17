<?php
	require 'dbconnection.php';
	
	$categoryID = '';
	$categoryID = $_GET['categoryID'];

	$sql = "DELETE from Category_YB19937 where categoryID = $categoryID";
	$conn->query($sql);
	echo $sql;
	$conn->close();
	
	//server side redirect
	header('Location: displayCategory.php');
?>

