
<?php
$hostname = "localhost";
$dbname = "edu_test";
$user = "root";
$pass = "root";

$conn = new mysqli($hostname,$user,$pass,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->conncet_error);
}

?>