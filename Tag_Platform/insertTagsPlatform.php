<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];
	$Platform = $_GET["Platform"];

	$sql = "INSERT INTO tags_platform values ('".$Etitle."','".$Platform."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Tag created successfully";
	} else if ($Etitle || $Platform) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertTagsPlatformForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
