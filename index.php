<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://timesofindia.indiatimes.com/blogs/');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($ch);
curl_close($ch);

$DOM = new DOMDocument;
libxml_use_internal_errors(true);
$DOM->loadHTML($html);
$elements = $DOM->getElementsByTagName('h2');

  for($i=0; $i<$elements->length;$i++)
  {
  	echo $elements->item($i)->nodeValue."<br>";
  }
?>