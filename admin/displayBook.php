<?php
// display.php
require 'dbconnection.php';
$sql = "Select * from Books_YB19937 LEFT JOIN Category_YB19937 ON Books_YB19937.categoryID = Category_YB19937.categoryID";
$result = $conn->query($sql);
?>
<HTML>
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
<Center>


<H2> Display All Books </H2>
<H3> <a href=newBook.html class="button"> Add New Book </a> </H3>
<Table> 
	<Tr> 
		<TD> Book ID</TD>
		<TD> Book Name </TD>
		<TD> Category Name </TD>
		<TD> Description </TD>
		<TD> Image </TD>
		<TD> Edit </TD>
		<TD> Delete </TD>
	</Tr>
<?php
while($row = $result->fetch_assoc())
{								
?>
	<Tr> 
		<TD> <?=$row['bookID']?> </TD>
		<TD> <?=$row['bookName']?> </TD>
		<TD> <?=$row['categoryName']?> </TD>
		<TD> <?=$row['bookDescription']?> </TD>
		<TD> <img src=images/<?=$row['image']?> width=100%> </TD>
		<TD> <a href=editBook.php?bookID=<?=$row['bookID']?>> Edit </a>  </TD>
		<TD> <a href=deleteBook.php?bookID=<?=$row['bookID']?>> X </a>  </TD>
	</Tr>
<?php
}
?>
</Table>	
<h2><a href=page1.php class="button">Admin Home</a></h2>
</Center>
</HTML>




