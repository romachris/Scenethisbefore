<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movlocationsdatabase";
$mname = $_GET['mname'];
$lname = $_GET['lname'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Search Location
$sql = "SELECT latitude,longtitude,heading,locationName,locationDescription FROM locations WHERE movieName='".$mname."' AND locationName='".$lname."'";
$result = $conn->query($sql);

    // output data
while($row = $result->fetch_assoc()) {
    $locationDescription= $row["locationDescription"];
    $locationName= $row["locationName"];
    $latitude= $row["latitude"];
    $longtitude = $row["longtitude"];
    $heading = $row["heading"];
    }

$conn->close();
?>
