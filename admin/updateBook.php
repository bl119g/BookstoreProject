<?php
require 'dbconnection.php';
$bookID = '';
$categoryID = '';
$bookName = '';
$image = '';
$bookDescription = '';
$bookID = $_POST['bookID'];
$categoryID = $_POST['categoryID'];
$bookName = $_POST['bookName'];
$image = $_POST['image'];
$bookDescription = $_POST['bookDescription'];

$sql = "update Books_YB19937 set bookName = '$bookName', categoryID = '$categoryID', image ='$image', bookDescription = '$bookDescription'
 where bookID=$bookID";
  
$conn->query($sql);

//echo $sql;

$conn->close();

header('Location: displayBook.php');

?>