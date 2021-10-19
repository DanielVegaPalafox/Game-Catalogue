<html>
<body>

<?php 
      	include("connection.php");
      
	$Rtitle = $_GET["Rtitle"];

	$sql = "DELETE FROM review where Rtitle = '".$Rtitle."'";

	if ($mysqli_conn->query($sql) === TRUE) {
    		echo "Review deleted successfully";
	} else if ($Rtitle) {
	    echo "Error: " . $sql . "<br>" . $mysqli_conn->error;
	}
	
	$mysqli_conn->close();
?> 

<form action="deleteReviewForm.html">
    <input type="submit" value="Delete Another" />
</form>

<form action="mainPage.html">
    <input type="submit" value="Go Back" />
</form>

<br>
</body>
</html>
