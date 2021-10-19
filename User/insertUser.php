<html>
<body>

<?php 
      	include("connection.php");
      
	$Username = $_GET["Username"];
	$Email = $_GET["Email"];
	$Password = $_GET["Password"];
	$Friends = $_GET["Friends"];
	$Date_Joined = $_GET["Date_Joined"];

	$sql = "INSERT INTO user values ('".$Username."','".$Email."','".$Password."',
	'".$Friends."','".$Date_Joined."')";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "New User created successfully";
	} else if ($Username || $Email || $Password || $Friends || $Date_Joined) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?>

<form action="insertUserForm.html">
    <input type="submit" value="Add Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
