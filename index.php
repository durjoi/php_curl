<?php
include 'simple_html_dom.php';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=durjoi');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$res = curl_exec($curl);

curl_close($curl);


$html = new simple_html_dom();
$html->load($res);
foreach($html->find('a[href^=/url?]') as $title)
  echo $title->plaintext . '<br>';
