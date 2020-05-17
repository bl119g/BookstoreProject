<?php
	require 'dbconnection.php';
	$sql = "Select * from Comments_YB19937 JOIN Books_YB19937 on Comments_YB19937.bookID = Books_YB19937.bookID";
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
		<script>
            function myFunction() {
              document.getElementById("showhide").innerHTML = "Hide";
            }
        </script>
		

		<h2>Display Comments</h2>
			<table border=1 width=60%>
				<tr>
					<td> Comment ID </td>
					<td> Book ID </td>
					<td> Comment </td>
					<td> Show/Hide </td>
                    <td> Delete </td>
				</tr>
		<?php
			while($row = $result->fetch_assoc())
			{
			
		?>
				<tr>
					<td> <?=$row['commentID']?> </td>
					<td> <?=$row['bookID']?> </td>
					<td> <?=$row['comment']?> </td>
                    <td> 
                        <button id="example-three" data-text-swap="Hide">Show</button>
                    </td>
                    <td> <a href=deleteComment.php?commentID=<?=$row['commentID']?>>Delete</a></td>
                    
				</tr>
		<?php
			}
		?>
			</table>
		<h3><a href=page1.php class="button">Admin Home</a></h3>
	</center>
</html>

<script type="text/javascript">
    var button = document.getElementById("example-three");
button.addEventListener('click', function() {
  if (button.getAttribute("data-text-swap") == button.innerHTML) {
    button.innerHTML = button.getAttribute("data-text-original");
  } else {
    button.setAttribute("data-text-original", button.innerHTML);
    button.innerHTML = button.getAttribute("data-text-swap");
  }
}, false);

</script>