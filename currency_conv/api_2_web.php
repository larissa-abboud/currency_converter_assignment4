<?php
$file = file_get_contents("https://lirarate.org/");


$dom = new DOMDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($file);
libxml_clear_errors();
//echo $dom->saveHTML();
$data = 'buy-value';
$scarp = $dom->getElementById($data);
foreach($scarp as $data){
    echo $data->nodeValue;
}
?>