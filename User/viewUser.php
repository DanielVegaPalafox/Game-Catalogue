<html>
<body>

<?php 
      	include("connection.php");

	$sql = "SELECT * FROM user";
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Username: " . $row["Username"]. ", Email: " . $row["Email"].
		", Password: " . $row["Password"]. ", Friends: " . $row["Friends"].
		", Date_Joined: " . $row["Date_Joined"]. "<br>";
	    }
	}
	
	$mysqli_conn->close();
?> 

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

</body>
</html>