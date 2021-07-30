<?php
include_once 'db_conn.php';

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO `utenti` (name, lastname, email)  VALUES ('$name', '$lastname', '$email')";
if (mysqli_query($conn, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(array(
        'success' => true,
    ));
    exit;
} else {
    echo "ERROR: $sql. " . mysqli_error($conn);
}
$conn->close();
