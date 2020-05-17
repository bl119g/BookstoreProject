<?php
require 'dbconnection.php';
$bookID = '';
$bookID = $_GET['bookID'];


$sql = "select * from Books_YB19937 where bookID=$bookID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<HTML>
<Center>

<H2>Update Books </H2>
<h3><a href=page1.php>Admin Home</a></h3>

	<Form Method=Post action=updateBook.php>
		<input type=hidden name=bookID value=<?=$row['bookID']?>>
		Name <Input type=text name=bookName value=<?=$row['bookName']?>> <BR>
		Category ID <Input type=text name=categoryID value=<?=$row['categoryID']?>> <BR>
		Image <Input type=text name=image value=<?=$row['image']?>> <BR>
		Description <input type=text name=bookDescription value=<?=$row['bookDescription']?>> <BR>
		<Input type=submit value=Update>
	</Form>

</Center>
</HTML>