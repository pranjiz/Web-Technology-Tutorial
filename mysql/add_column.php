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

$sql = "alter table newTable add address char";

if ($con->query($sql) == TRUE)
{
  echo "Column added successfully";
}
else
{
  echo "Error adding column: " ;// $conn->error;
}

$con->close();

?>