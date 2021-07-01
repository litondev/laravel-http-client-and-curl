<?php

// init
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/curl/check-error");

// set return have to save in variabel
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); // string

// exec
$response = curl_exec($ch);

// get info
$info = curl_getinfo($ch);

// close
curl_close($ch);

if(strval($info["http_code"]) == "0"){
	echo "Terjadi Kesalahan";
}else{
	if(strval($info["http_code"])  == "500"){
		if($info["content_type"] == "application/json"){
			echo json_decode($response,true)["Status"];
		}else{		
			echo "Terjadi Kesalahan Server";
		}
	}else{
		print_r($info);
	}
}
?>