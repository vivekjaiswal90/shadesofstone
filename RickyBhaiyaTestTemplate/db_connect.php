<?php 
$conn = mysqli_connect('localhost','root','vivek','Forging');


// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>