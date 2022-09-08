<?php
$servername="localhost";
$username="root";
$password="";
$dbname="reet";
//create connection
$con=mysqli_connect($servername,$username,$password,$dbname);//code to connect
if(mysqli_connect_errno())//method to check the error in the connection
{
	echo "failed to connect";
	exit();
}
echo "connection success";
// Create table

$sql = "create table newTable(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50))";

if ($con->query($sql) == TRUE) 
{
  echo "table newTable created successfully";
} 
else 
{
  echo "Error creating database: " ;// $conn->error;
}

$con->close();

?>