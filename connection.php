<?php
$servername = "localhost";
$username = "USERNAME_HERE";
$password = "PASSWORD_HERE";
$dbname = "DATABASE_NAME_HERE";

// Create connection
$mysqli_conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli_conn->connect_error) {
    die("Connection failed: " . $mysqli_conn->connect_error);
} 
