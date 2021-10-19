<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];
	$Summary = $_GET["Summary"];

	$sql = "INSERT INTO game values ('".$Etitle."','".$Summary."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Tag created successfully";
	} else if ($Etitle || $Summary) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertTagsForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
