// JavaScript Document

$(document).ready(function(){

//checks location - only runs on landing page	
	
	if (navigator.geolocation)
	{
	navigator.geolocation.getCurrentPosition(showPosition);
	}
	else{console.log("Geolocation is not supported by this browser.");}

	function showPosition(position)
	{
	$('#lat').val(position.coords.latitude);
	$('#lon').val(position.coords.longitude);
	
	console.log("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
	console.log(window.location);
	}
	
});