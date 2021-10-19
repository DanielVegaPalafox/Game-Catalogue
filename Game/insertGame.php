<html>
<body>

<?php 
      	include("connection.php");
      
	$Gtitle = $_GET["Gtitle"];
	$Subtitle = $_GET["Subtitle"];
	$Price = $_GET["Price"];
	$Release_Date = $_GET["Release_Date"];
	$Dnam = $_GET["Dnam"];
	$Pnam = $_GET["Pnam"];

	$sql = "INSERT INTO game values ('".$Gtitle."','".$Subtitle."','".$Price."',
	'".$Release_Date."','".$Dnam."','".$Pnam."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Game created successfully";
	} else if ($Gtitle || $Subtitle || $Price || $Release_Date || $Dnam || $Pnam) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertGameForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
