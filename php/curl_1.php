<?php

// init
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/curl/check");

// exec
curl_exec($ch);

// close
curl_close($ch);

?>