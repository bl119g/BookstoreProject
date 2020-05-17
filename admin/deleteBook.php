<?php
require 'dbconnection.php';
$bookID = '';
$bookID = $_GET['bookID'];

$sql = "delete from Books_YB19937 where bookID=$bookID";
$conn->query($sql);

//echo $sql;

$conn->close();

header('Location: displayBook.php');

?>