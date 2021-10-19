<html>
<body>

<?php 
      	include("connection.php");
      
	$Pname = $_GET["Pname"];

	$sql = "DELETE FROM publisher where Pname = '".$Pname."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Publisher deleted successfully";
	} else if ($Pname) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deletePublisherForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
