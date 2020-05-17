
<?php
    require 'dbconnection.php';
	$bookID = "";

	if (empty($_GET))
	{
		$sql = "SELECT * from Books_YB19937 LEFT JOIN Category_YB19937 ON Books_YB19937.categoryID = Category_YB19937.categoryID";
	}

	Else
	{
		$bookID = $_GET['bookID'];
		$sql = "SELECT * from Books_YB19937 LEFT JOIN Category_YB19937 ON Books_YB19937.categoryID = Category_YB19937.categoryID";
        
        $sql1 = "Select * from Books_YB19937 where bookID=$bookID";

	}
	$result1 = $conn->query($sql1);
	$result = $conn->query($sql);
    

?>

<?php

    
    $sql2 = "SELECT comment FROM Comments_YB19937 WHERE bookID=$bookID AND showhide=1";
	           $result2 = $conn->query($sql2);


?>

<!DOCTYPE html>
<html>
<head>
<title>Michelle's Bookstore</title>
<Style type="text/css">
* {
	margin: 0;
	padding: 0;
}
body {
	font-family: Arial;
	background-color: #ebebeb;
}
#header {
	background-color: grey;
	height: 170px;
	width: 100%;
}
.container {
	width: 960px;
	height: auto;
	margin: 0 auto;
    padding: inherit;
}
#LogoArea {
	width: 200px;
	height: 180px;
	background: url('logo.png');
	float: left;
	background-repeat: no-repeat;
	margin-bottom: 25px;
	margin-left:65px;
}

.page {
	background-color: #FFFFFF;
	padding: 20px;
	padding-bottom: 1px;
}
footer {
	background-color: #000000;
	height: 20px;
	width: 100%;
	color: #FFFFFF;
	padding-top: 20px;
	text-align: center;
}
p {
	margin-bottom: 20px;
}
    
.navbar {
  overflow: hidden;
  background-color: #333;
  border-radius: 20px;
  margin-top:30px;
  margin-right: 45px;

}

 .search {
     position:relative;
     display: block;
     padding: 0px 0px 0px 0px;
     float:right;

}

.navbar a {
  float: left;
  font-size: 13px;
  color: white;
  text-align: center;
  padding: 16px 10px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 13px;  
  border: none;
  outline: none;
  color: white;
  padding: 12px 14px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: gray;
  border-radius: 15px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

    .bar {
	height: 10px;
	width: 100%;
        margin-top:2px;
        margin-bottom:2px;
    }
 .featured {
        margin-top:1px;
     margin-bottom:1px;
    padding:2px;
     width: 100%;
     
        
    }
    
h4 {
        color:black;
		font-size: 35px;
        margin-right: 10px;
        margin-top: 8px;
        margin-bottom: 8px;
		
}
    

    
* {
  box-sizing: border-box;
}

input[type=text] {
  width: 75%;
  padding: 0px 0px;
  margin: 15px 0;
  box-sizing: border-box;

}
    
    

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

    
 #navArea {
	height: 80px;
	float: right;
	margin-top: 50px;
	margin-right: 70px;
	
 }
    
    main
{
display: inline;
margin-bottom: 10px;
}

section
{
margin-top: 12px;
margin-right: 13px;
padding: 4px;
margin-bottom: 12px;
width: 900px;
}

article
{
background-color: #ebebeb;
margin-top:10px;
margin-bottom:10px;
margin-right:35px;
margin-left:35px;


}

.news-nav{
    width:90%;
}
.news-nav section 
{
	width: 32%; float: left;
    margin-bottom: 10px;
    text-align: center;
}

</Style>
</head>
	
	<div id="header">	
		<div class="container">
			<a href="index.php"><div id="LogoArea"></div></a>
            <div id="navArea">
                <Div class="navbar">
                    <a href="index.php"> Home </a>
                    <div class="dropdown">
		              <button class="dropbtn">Category</button>
		              <div class="dropdown-content">
                          <a href=index.php>All Categories</a>
                            <?php
                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                                      echo "<a href=details.php?bookID=$row[bookID]>$row[categoryName]</a>";
                                  }
                                }
                                else {
                                  echo "0 results";
                                }
                                $conn->close();
                            ?>
		              </div>
		          </div>
            <a href=contactus.php> Contact Us </a>
                <div class="search">
                    <Form action="findBook.php" method="post">
                        <input type="text" name="search" size="20" height="14">
                        <input type="image" src="search.png" alt="search" width="18" height="18">
                    </Form>                         
                </div>
                </Div>		
            </div> 
		</div>			
	</div>
   <body>
    <main>
        <h4>Book Details:</h4>
        <center>
        <section class="news-nav">
				<?php
				while($row = $result1->fetch_assoc())
				{								
				?>
					<section>
					<article>
					<img src=images/<?=$row['image']?> width=40%> <br><br> <?=$row['bookName']?> <br> <br> <?=$row['bookDescription']?> <br>
					</article>
					</section>
				<?php
				}
				?>
            </section>
            </center>
        </main>
       </body>
		<br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
		<div style="background-color:#ebebeb">
			<center>
			<br><h3>Add a Comment!</h3><br>
			<form method="post" action="insertComment.php">
			<input type=hidden name=bookID value=<?=$bookID?>>
			<input type=text name=comment><br><br>
			<input type=submit name=submit style="margin-left:630px">
			<br><br><br><br>
			</form>
            <hr><br>
                
            <h3>User Comments:</h3><br>    
            <?php
                while($row=$result2->fetch_assoc())
                {
            ?>
                    <section>
                    		<p><?=$row['comment']?></p><br>
                </section>
            <?php
                }       
            ?>
            </center>
		</div>
</html>



