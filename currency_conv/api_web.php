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
$rate = "" ;
$string[] = $element->plaintext;
foreach($string as $string){

$rate =$string["10"].$string["11"]. $string["13"]. $string["14"]. $string["15"].$string["16"];

//echo $rate;
}

echo json_encode($rate);
//obtain rate using php from website get api
?>