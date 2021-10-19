<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];

	$sql = "DELETE FROM tags where Etitle = '".$Etitle."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Tag deleted successfully";
	} else if ($Etitle) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteTagsForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
