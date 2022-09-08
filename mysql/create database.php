<?php
$servername="localhost";
$username="root";
$password="";
//create connection
$con=mysqli_connect($servername,$username,$password);//code to connect
if(mysqli_connect_errno())//method to check the error in the connection
{
	echo "failed to connect";
	exit();
}
echo "connection success";
// Create database

$sql = "create database reet";

if ($con->query($sql) == TRUE) 
{
  echo "Database created successfully";
} 
else 
{
  echo "Error creating database: " ;//. $conn->error;
}

$con->close();

?>