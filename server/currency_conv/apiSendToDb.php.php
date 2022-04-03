<?php
// send data from mobile to php
include("db_info.php");


$rate = $_GET["rate"] ??"" ;
$amount_rec = $_GET["amount_rec"] ??"";

$query = $mysqli->prepare("INSERT INTO rate (rate, amount_rec) VALUES (?, ?);");
$query->bind_param("ii", $rate, $amount_rec);
$query->execute();

$response = [];
$response["status"] = "obtained";
echo $rate * $amount_rec;
$json_response = json_encode($response);
echo $json_response;

?>