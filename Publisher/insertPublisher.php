<html>
<body>

<?php 
      	include("connection.php");
      
	$Pname = $_GET["Pname"];
	$PAddress = $_GET["PAddress"];

	$sql = "INSERT INTO publisher values ('".$Pname."','".$PAddress."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Game created successfully";
	} else if ($Pname || $PAddress) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertPublisherForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
