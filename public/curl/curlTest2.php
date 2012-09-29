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


//FUNCTION WORKS//

//for loop iterates thru data and make a new api call for each loop. Data is passed to the $arr variable and looped thru with a foreach. Values are echoed to screen, set variables and send to model to push into database to achieve desired effect//

//create variables for limit and offset to pass into API call, more dynamic and self-sufficient//

for($i=1;$i<2;$i++){
$bills = get_data("http://www.govtrack.us/api/v1/bill/?congress=112&limit=".(1000*$i));
$arr = json_decode($bills,true);

//var_dump($arr["objects"]);

var_dump($arr['meta']['next']);

foreach($arr["objects"] as $r){
	echo '<pre>';

	var_dump($r["bill_resolution_type"]);
	// USE THIS EXAMPLE => $dbmodel->insertData($billname, .....)
	//echo $r[1]['congress'].'<br>';
	echo '</pre>';	
}
}