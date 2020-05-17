<html>
	<head>
		<style>
			h3 {
				text-align:center;
				font-size: 20px;
			}
		</style>
	</head>
</html>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    //echo "<H3>Welcome to the member's area, User Name: " . $_SESSION['username'] . "!</H3>";
} else {
    header("Location: index.html");
}
?>