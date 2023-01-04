<?php
$servername = 'localhost';
$username = 'root';
$serverpass = '';
$db = 'game';

$conn = new mysqli($servername, $username, $serverpass, $db);
if ($conn->connect_error) {
	die('Connection failed : '.conn->connect_error);
}
echo 
	"Conncetion succesful";
$uname = $_POST['Username'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$sql = "INSERT INTO clients(username, email, password) VALUES('$uname', '$email', '$pass' )";
if($conn->query($sql) === TRUE){
	echo
	"Recoreded successfully";
}
else{
	echo 
	" Not Recoreded";
}
$conn->close();
header("location:index.html");

?>