<html>
<body>

<?php 
      	include("connection.php");
      
	$DPname = $_GET["DPname"];
	$DPAddress = $_GET["DPAddress"];

	$sql = "INSERT INTO developer_publisher values ('".$DPname."','".$DPAddress."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Developer Publisher created successfully";
	} else if ($DPname || $DPAddress) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertDeveloperPublisherForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
