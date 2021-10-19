<html>
<body>

<?php 
      	include("connection.php");
      
	$Username = $_GET["Username"];

	$sql = "DELETE FROM review where Rtitle = '".$Rtitle."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "User deleted successfully";
	} else if ($Username) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteUserForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
