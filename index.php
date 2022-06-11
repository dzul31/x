<?php

$url = "https://api.coinbrain.com/public/coin-info";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
 "56": [
  "0x7130d2a12b9bcbfae4f2634d864a1ee1ce3ead9c",
  "0xe9e7cea3dedca5984780bafc599bd69add087d56",
  "0x8ac76a51cc950d9822d68b83fe1ad97b32cd580d"
 ]
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

