<html>
<body>

<?php 
      	include("connection.php");
      
	$Cname = $_GET["Cname"];
	$Followers = $_GET["Followers"];
	$Founding_Date = $_GET["Founding_Date"];

	$sql = "INSERT INTO critic values ('".$Cname."','".$Followers."','".$Founding_Date."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Critic created successfully";
	} else if ($Cname || $Followers || $Founding_Date) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertCriticForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
