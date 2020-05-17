<?php
    require 'dbconnection.php';

    $commentID = "";

    $commentID = $_GET['bookID'];
    $showhide = $_GET['showhide'];

    if($showhide == 0){
    $sql = "UPDATE Comments_YB19937 SET showhide = 1 WHERE commentid = $commentID";
    }
    else{
    $sql = "UPDATE Comments_YB19937 SET showhide = 0 WHERE commentid = $commentID";
    }

    $conn->query($sql);
    $conn->close();

    header('Location: displayComment.php');

?>