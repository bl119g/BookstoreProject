<?php
include 'members.php';
?>
<html>
<style>
	center{
		background-image: url('images/admin.jpg');
		background-repeat: repeat;
	}
	
	form{
		font-size: 30px;
	}
	
	button{
		padding: 10px;
		font-size:16px;
	}
	
	h1{
		color: white;
	}
	
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
</style>
<body>

<?php
echo '<br><Center>';
echo '<br><br><br><br>';
echo '<H1> Admin Home </H1>';

	echo '<br><H3>';
	echo '<br>';
	Echo '<a href="displayCategory.php" class="button">Display Categories</a>';
	echo ' ';
	echo ' ';
	echo ' ';
	echo ' ';
	Echo '<a href="displayBook.php" class="button">Display Books</a>';
	echo ' ';
	echo ' ';
	Echo '<a href="displayComment.php" class="button">Display Comments</a>';
	echo ' ';
	echo ' ';
	Echo '<a href="displayContact.php" class="button">Display Contact</a>';
	echo '</H3><br>';
	echo '<br><br>';
	echo '<form> <button type="submit" formaction="logout.php">Logout</button> </form>';
	echo '<br><br><br><br>';
	
	
echo '<br></Center>';
?>

</body>
</html>