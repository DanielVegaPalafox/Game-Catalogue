<html>
<body>

<?php 
      	include("connection.php");
      
	$DPname = $_GET["DPname"];

	$sql = "DELETE FROM developer_publisher where DPname = '".$DPname."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Developer Publisher deleted successfully";
	} else if ($DPname) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteDeveloperPublisherForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
