<?php

// init
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/curl/check-post");

// set return have to save in variabel
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); // string

// digunakan ketika mendapat redirect sebuah website maka akan mengikti atau tidak
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

// set header
curl_setopt($ch,CURLOPT_HTTPHEADER,[
	"X-MY-ID: 1",
	// "Content-Type: application/json",
]);

// set post
curl_setopt($ch, CURLOPT_POST,1);

// set fields post
// using http_build_query()
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query([
	"code" => "OK",	
]));

// exec
$response = curl_exec($ch);

// close
curl_close($ch);

print_r($response);
?>