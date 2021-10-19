<html>
<body>

<?php 
      	include("connection.php");
      
	$Rtitle = $_GET["Rtitle"];
	$Time_Date = $_GET["Time_Date"];
	$Text = $_GET["Text"];
	$User = $_GET["User"];
	$CritName = $_GET["CritName"];
	$GameTitle = $_GET["GameTitle"];

	$sql = "INSERT INTO review values ('".$Rtitle."','".$Time_Date."','".$Text."',
	'".$User."','".$CritName."','".$GameTitle."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New Review created successfully";
	} else if ($Rtitle || $Time_Date || $Text || $User || $CritName || $GameTitle) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertReviewForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
