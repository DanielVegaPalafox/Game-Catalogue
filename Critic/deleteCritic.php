<html>
<body>

<?php 
      	include("connection.php");
      
	$Cname = $_GET["Cname"];

	$sql = "DELETE FROM critic where Cname = '".$Cname."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Critic deleted successfully";
	} else if ($Cname) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteCriticForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
