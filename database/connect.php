


<?php
$host ='localhost';
$user = 'root';
$pass = '';
$db_name ='mangabest';

// connect to database mysqli = ================ 

$conn = new mysqli("localhost","root","","mangabest");
if ($conn->connect_errno){

    die('database connection error' . $conn->connect_error);

}
?>

