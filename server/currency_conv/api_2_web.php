<?php
include("db_info.php");
//include api web to obtain amount

// insert in databse the rate and amount 
// calculate the end result
// return to front end as json object
$query = $mysqli->prepare("SELECT* FROM rate;");/*selct from table the rate and returns it as json object */
$query->execute();
$array = $query->get_result(); // obtain the rate
$response = [];//fetch
while($rate = $array->fetch_assoc()){
    $response[] = $rate;
}
$json_response = json_encode($response);
echo $json_response;
//api fetches data from database
// front end will call this api and retrive data

?>
