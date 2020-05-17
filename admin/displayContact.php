<?php
	require 'dbconnection.php';
	$sql = "Select * from Contact_YB19937";
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

		<h2>Display Contact Information</h2>
			<table>
				<tr>
					<td> ID </td>
					<td> First Name </td>
					<td> Last Name </td>
					<td> Subject </td>
					<td> Message </td>
				</tr>
		<?php
			while($row = $result->fetch_assoc())
			{
			
		?>
				<tr>
					<td> <?=$row['id']?> </td>
					<td> <?=$row['fName']?> </td>
					<td> <?=$row['lName']?> </td>
					<td> <?=$row['subject']?> </td>
					<td> <?=$row['message']?> </td>
				</tr>
		<?php
			}
		?>
			</table>
				<h3><a href=page1.php class="button">Admin Home</a></h3>
	</center>
</html>