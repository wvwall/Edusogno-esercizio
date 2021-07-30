
<?php
include_once 'db_conn.php';

$event_name = $_REQUEST['event_name'];
$description = $_REQUEST['description'];
$date = $_REQUEST['date'];
$hour = $_REQUEST['hour'];

$sql = "INSERT INTO `eventi` (event_name, description, date, hour)  VALUES ('$event_name', '$description', '$date', '$hour')";

if (mysqli_query($conn, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(array(
        'event_name' => $event_name,
        'event_description' => $description,
        'date' => $date,
        'time' => $hour,
    ));
    exit;
} else {
    echo "ERROR: $sql. " . mysqli_error($conn);
}
$conn->close();
?>