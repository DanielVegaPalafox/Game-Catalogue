<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];

	$sql = "DELETE FROM tags_platform where Etitle = '".$Etitle."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Platform deleted successfully";
	} else if ($Etitle) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteTagsPlatformForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
