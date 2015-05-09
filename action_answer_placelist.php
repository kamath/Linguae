<?php
	$res = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$_GET['action']."&radius=5000&types=food&key=AIzaSyAZwbQCDTf-AKn0dvdNahrgXOqkZQTydTQ");
	$jsonContent = json_decode($res, true);
	foreach ($jsonContent['results'] as $result) {
    	// now you have the $result array that contains the location of the place
    	// and the name ($result['formatted_address'], $result['name']) and other data.
    	echo $result['name'].":".$result['vicinity'].";";
	}
?>