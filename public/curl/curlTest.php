<?php

//function call - take a url variable
function get_data($url) {
	//initialize curl
	  $ch = curl_init();
	  $timeout = 5;
	//set options
	  curl_setopt($ch, CURLOPT_URL, $url);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	//execute curl
	  $data = curl_exec($ch);
	//close curl and return data
	  curl_close($ch);
	  return $data;
}

//returns bill data
$bills = get_data("http://www.govtrack.us/api/v1/bill/?congress=112&order_by=current_status_date");

//returns member data
$people = get_data("http://www.govtrack.us/api/v1/person/");

//returns a single person
$person = get_data("http://api.opencongress.org/people?person_id=300001");

//creates new XML element
$data = new SimpleXMLElement($person);

//echo results
echo '<pre>';
//creates variable to node value
//$num = ($data->people->person->{'person-stats'}->{'party-votes-percentage'});
echo '</pre>';


$xmlstr = file_get_contents('http://api.opencongress.org/people?person_id=300001');
$newXml = new SimpleXMLElement($xmlstr);
$res = $newXml->xpath("/field[@name='name']/string");

foreach( $res as $r ){
	echo $r[0]."<br>";
}