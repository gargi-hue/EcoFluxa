<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$date = $data['date'];
$name = $data['name'];
$family = $data['family'];
$region = $data['region'];
$water = $data['water'];
$electricity = $data['electricity'];

$sql = "INSERT INTO readings 
(reading_date, user_name, family_members, region, water_usage, electricity_usage)
VALUES ('$date', '$name', '$family', '$region', '$water', '$electricity')";

if ($conn->query($sql)) {
  echo json_encode(["message" => "Reading added successfully"]);
} else {
  echo json_encode(["error" => $conn->error]);
}
?>