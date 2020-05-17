<?php
require 'dbconnection.php';

$bookName = '';
$categoryID  = '';
$image = '';
$bookDescription = '';

$bookName = $_POST['bookName'];
$categoryID = $_POST['categoryID'];
$image = $_POST['image'];
$bookDescription = $_POST['bookDescription'];

$sql = "INSERT INTO Books_YB19937 (bookName, categoryID, image, bookDescription)
 VALUES
 ('$bookName', '$categoryID', '$image', '$bookDescription')";
  
$conn->query($sql);

//echo $sql;

$conn->close();

header('Location: displayBook.php');

?>

