<?php
	require 'dbconnection.php';
	$sql = "Select * from Category_YB19937";
	$result = $conn->query($sql);



?>
<html>
<style>

	
	.button {

	  font: bold 11px Arial;

	  text-decoration: none;

	  background-color: #EEEEEE;

	  color: #333333;
	  
	  font-size: 16px;

	  padding: 2px 6px 2px 6px;

	  border-top: 1px solid #CCCCCC;

	  border-right: 1px solid #333333;

	  border-bottom: 1px solid #333333;

	  border-left: 1px solid #CCCCCC;
	}
	  
	  table,td, tr{
		  border: 1px solid black;
		  padding: 6px;
		  font-size: 16px;
		  width: 75%;
		  
	  }

	}
</style>
	<center>
	
		<h2>Display All Categories</h2>
			<h3><a href=newCategory.htm class="button">Add New Data</a></h3>
			<table>
				<tr>
					<td> ID </td>
					<td> Category Name </td>
					<td> Edit </td>
					<td> Delete </td>
				</tr>
		<?php
			while($row = $result->fetch_assoc())
			{
			
		?>
				<tr>
					<td> <?=$row['categoryID']?> </td>
					<td> <?=$row['categoryName']?> </td>
					<td> <a href=editCategory.php?categoryID=<?=$row['categoryID']?>> Edit </a></td>
					<td> <a href=deleteCategory.php?categoryID=<?=$row['categoryID']?>> Delete </a></td>
				</tr>
		<?php
			}
		?>
			</table>
		<h3><a href=page1.php class="button">Admin Home</a></h3><br>
	</center>
</html>