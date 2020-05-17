<?php
	require 'dbconnection.php';
	
	$commentID = '';
	$commentID = $_GET['commentID'];

	$sql = "DELETE from Comments_YB19937 where commentID = $commentID";
	$conn->query($sql);
	echo $sql;
	$conn->close();
	
	//server side redirect
	header('Location: displayComment.php');
?>

