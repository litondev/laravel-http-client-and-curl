<?php

// init
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/curl/check");

// set return have to save in variabel
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); // string

// exec
$response = curl_exec($ch);

// get info
$info = curl_getinfo($ch);

// close
curl_close($ch);

// echo $response;

print_r($info);
?>