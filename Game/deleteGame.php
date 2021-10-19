<html>
<body>

<?php 
      	include("connection.php");
      
	$Gtitle = $_GET["Gtitle"];

	$sql = "DELETE FROM game where Gtitle = '".$Gtitle."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Game created successfully";
	} else if ($Gtitle) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteGameForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
