<html>
<body>

<?php 
      	include("connection.php");
      
	$Etitle = $_GET["Etitle"];
	$Genre = $_GET["Genre"];

	$sql = "INSERT INTO tags_genre values ('".$Etitle."','".$Genre."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Tag created successfully";
	} else if ($Etitle || $Genre) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertTagsGenreForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
