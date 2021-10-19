<html>
<body>

<?php 
      	include("connection.php");

	$sql = "SELECT * FROM game";
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Title: " . $row["Gtitle"]. ", Subtitle: " . $row["Subtitle"].
		", Price: " . $row["Price"]. ", Release_Date: " . $row["Release_Date"].
		", Developer: " . $row["Dnam"]. ", Publisher: " . $row["Pnam"]. "<br>";
	    }
	}
	
	$mysqli_conn->close();
?> 

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

</body>
</html>