<html>
<body>

<?php 
      	include("connection.php");
      
	$Dname = $_GET["Dname"];

	$sql = "DELETE FROM developer where Dname = '".$Dname."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Developer deleted successfully";
	} else if ($Dname) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteDeveloperForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
