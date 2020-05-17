<?php
	require 'dbconnection.php';
	$categoryID = '';
	$categoryID = $_GET['categoryID'];

	$sql = "Select * from Category_YB19937 where categoryID = $categoryID";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<html>
	<center>
		<h2>Update Form</h2>
		<h3><a href=page1.php>Admin Home</a></h3>
			<form method=Post action=updateCategory.php>
				<input type=hidden name=categoryID value=<?=$row['categoryID']?>>
				Category Name <input type=text name=categoryName value=<?=$row['categoryName']?>>
				<input type=submit name=Update>
				
			</form>
	
	</center>
	
	
	
</html>