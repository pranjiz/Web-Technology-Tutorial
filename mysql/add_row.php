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

$sql = "insert into newTable(firstname, lastname, email, address)
        Values('Mona', 'das','monadas@gmail.com', 'BBSR'),
        ('Subha', 'Pattnaik', 'subhapattnaik72378@gmail.com', 'Berhampur')
        ";

if ($con->query($sql) == TRUE)
{
  echo "table Pranjal inserted successfully";
}
else
{
  echo "Error inserting database: " ;// $conn->error;
}

$con->close();

?>