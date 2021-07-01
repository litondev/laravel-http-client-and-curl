<?php
// TIMEOUT
// MAXREDIRS
// CONNECTTIMEOUT
// USERAGENT

// init
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/curl/check-error");

// set return have to save in variabel
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); // string

// digunakan ketika mendapat redirect sebuah website maka akan mengikti atau tidak
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

// set header
curl_setopt($ch,CURLOPT_HTTPHEADER,[
	"Content-Type: application/json",
]);

// exec
$response = curl_exec($ch);

// close
curl_close($ch);

print_r($response);
?>