<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fuel-management-system-database";

$auto_id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM vehicle_data WHERE auto_id=$auto_id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../0-view-pages/0-register-view-page.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>