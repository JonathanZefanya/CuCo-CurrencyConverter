<?php
$api = "f5aa9b60515f40329cb019cc7ec7c278";
$string = file_get_contents("https://openexchangerates.org/api/latest.json?app_id=$api");
$json = json_decode($string, true);
$i = 0;
foreach ($json['rates'] as $key => $value) {
    $currency[$i] = $key;
    $rate[$i] = $value;
    $i = $i + 1;
}
