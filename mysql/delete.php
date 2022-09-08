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

$sql = "delete from newTable where firstname = 'subha'";

if ($con->query($sql) == TRUE){
  echo "Row deleted successfully";
}else{
  echo "Error deleting row: " ;// $conn->error;
}

$con->close();

?>