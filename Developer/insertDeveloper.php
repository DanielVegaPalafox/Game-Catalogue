<html>
<body>

<?php 
      	include("connection.php");
      
	$Dname = $_GET["Dname"];
	$DAddress = $_GET["DAddress"];

	$sql = "INSERT INTO developer values ('".$Dname."','".$DAddress."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Developer created successfully";
	} else if ($Dname || $DAddress) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertDeveloperForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
