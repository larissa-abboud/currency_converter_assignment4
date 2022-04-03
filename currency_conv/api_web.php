<?php
include_once("simple_html_dom.php");
//use curl to get html content
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
// Find all images on webpage

// Find all links on webpage
$array=[] ;
//$array["rate"] = $rate;

foreach($html->find("span") as $element)
$rate = "" ;
$string[] = $element->plaintext;
foreach($string as $string){

$rate =$string["10"].$string["11"]. $string["13"]. $string["14"]. $string["15"].$string["16"];
//$arrar["0"] = $string["0"];
echo $rate;
}
//array["rate"] =$element->plaintext;
//echo '<pre>'; print_r($string); echo '</pre>';
echo json_encode($rate);
/**foreach($html->find("span") as $element)
echo $element->plaintext */
?>