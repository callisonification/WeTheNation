<?php

$ch = curl_init("http://www.govtrack.us/api/v1/bill");

curl_setopt($ch, CURLOPT_HEADER, 0);

$result = curl_exec($ch);
curl_close($ch);

echo $result
