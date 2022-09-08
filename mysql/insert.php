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

$sql = "insert into newTable(firstname, lastname, email)
        Values('Pranjal', 'Singh', 'pranjalsingh@gmail.com'),
        ('Bibhu', 'Prasad', 'bibhuprasad@gmail.com'),
        ('Reet', 'Majhi', 'reetmajhi@gmail.com'),
        ('mitu', 'Chopdar', 'sweta789@gmail.com'),
        ('chitu', 'Nath', 'ayush663@gmail.com')";

if ($con->query($sql) == TRUE)
{
  echo "table newTable inserted successfully";
}
else
{
  echo "Error inserting database: " ;// $conn->error;
}

$con->close();

?>