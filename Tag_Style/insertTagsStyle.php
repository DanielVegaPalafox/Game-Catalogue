<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];
	$Style = $_GET["Style"];

	$sql = "INSERT INTO tags_style values ('".$Etitle."','".$Style."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Tag created successfully";
	} else if ($Etitle || $Style) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertTagsStyleForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
