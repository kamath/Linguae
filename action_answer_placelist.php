<?php
	$json = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$_GET['action']."&radius=5000&types=food&key=AIzaSyAZwbQCDTf-AKn0dvdNahrgXOqkZQTydTQ");
	$data = json_decode($json,true);
	$echo = "";
	foreach($data as $item) { //foreach element in $arr
    	echo $echo.$item['results']['name']."\n"; //etc
	}
?>
