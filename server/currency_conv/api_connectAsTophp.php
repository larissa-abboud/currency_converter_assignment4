<?php
// send data from mobile to php
include("db_info.php");


$rate = $_POST["rate"];
$amount_rec = $_POST["amount_rec"];

$query = $mysqli->prepare("INSERT INTO rate (rate, amount_rec) VALUES (?, ?)");
$query->bind_param("sss", $rate, $amount_rec);
$query->execute();

$response = [];
$response["status"] = "obtained";

$json_response = json_encode($response);
echo $json_response;

?>