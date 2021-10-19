<html>
<body>

<?php 
      	include("connection.php");

	$sql = "SELECT * FROM tags_platform";
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Title: " . $row["Etitle"]. ", Platform: " . $row["Platform"]. "<br>";
	    }
	}
	
	$mysqli_conn->close();
?> 

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

</body>
</html>