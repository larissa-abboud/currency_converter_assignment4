<?php
include_once("simple_html_dom.php");
//used a diferent website that given
function getHTML($url,$timeout)
{
       $ch = curl_init($url); // initialize curl with given url
       curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
       curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
       return @curl_exec($ch);
}
$html=str_get_html(getHTML("https://lbprate.com/",10));

$array=[] ;


foreach($html->find("span") as $element)
$rate ="";
$string[] = $element->plaintext;
foreach($string as $string){

$rate =$string["10"].$string["11"]. $string["13"]. $string["14"]. $string["15"];

//echo $rate;
}
$array["rate"] =$rate;
include("db_info.php");
/**$id = $_GET["rate_id"]; //would let me retreive the code from the URL i.e: ?course_id=4

$query = $mysqli->prepare("SELECT * FROM rate WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();

$array = $query->get_result();

$response = [];

while($course = $array->fetch_assoc()){
    $response[] = $course;
}

$json_response = json_encode($response);
echo $json_response; */

echo json_encode($array);
//obtain rate using php from website :get api
?>