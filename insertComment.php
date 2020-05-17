<?php
	require 'dbconnection.php';
	$comment = '';
	
	$comment = $_POST['comment'];
	$bookID = $_POST['bookID'];
	
	$sql = "Insert into Comments_YB19937 (comment, bookID, showhide) VALUES ('$comment', '$bookID', 1)";
    $conn->query($sql);
	echo $sql;
	$conn->close();
	
	header('Location: details.php?bookID='.$bookID);





?>