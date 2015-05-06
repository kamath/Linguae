<?php
	$json = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$_GET['action']."&radius=5000&types=food&key=AIzaSyAZwbQCDTf-AKn0dvdNahrgXOqkZQTydTQ");
	$data = json_decode($json, true);
	foreach($data as $item) { //foreach element in $arr
	    echo $item['results']['name']; //etc
	}
?>
