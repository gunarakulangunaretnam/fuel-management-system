<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feul-management-system-database";

$auto_id = $_GET['id'];

$vehicle_no = $_POST['vehicle_no'];
$vehicle_owner = $_POST['vehicle_owner'];
$licence_status = $_POST['licence_status'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE vehicle_data SET vehicle_number='$vehicle_no', vehicle_owner_name = '$vehicle_owner', licence_renewal_status = '$licence_renewal_status' WHERE auto_id = $auto_id";

if ($conn->query($sql) === TRUE) {
   header('Location: register-view.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>