<html>
<body>

<?php 
      	include("connection.php");

	$sql = "SELECT * FROM review";
	$result = $mysqli_conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Title: " . $row["Rtitle"]. ", Time_Date: " . $row["Time_Date"].
		", Text: " . $row["Text"]. ", User: " . $row["User"].
		", Critic_Name: " . $row["CritName"]. ", GameTitle: " . $row["GameTitle"]. "<br>";
	    }
	}
	
	$mysqli_conn->close();
?> 

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

</body>
</html>