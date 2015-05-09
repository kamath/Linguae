<?php
	$res = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$_GET['action']."&radius=5000&types=food&key=AIzaSyDsBsq9Dei-OnXAYzrSZHC2s6Mvx8_XCxo");
	$jsonContent = json_decode($res, true);
	foreach ($jsonContent['results'] as $result) {
    	// now you have the $result array that contains the location of the place
    	// and the name ($result['formatted_address'], $result['name']) and other data.
    	if(isset($result['photos']))
		{
			foreach($result['photos'] as $r)
    		{	
                if(in_array("restaurant", $result['types']))
                {
				echo "<img src=\"https://maps.googleapis.com/maps/api/place/photo?key=AIzaSyDsBsq9Dei-OnXAYzrSZHC2s6Mvx8_XCxo&photoreference=".$r['photo_reference']."&maxheight=200\"><br>".$result['name']."`".$result['vicinity'].";";	
                }
    		}
    	}
    	else
    	{
			echo "<img src=\"".$result['icon']."\"><br>".$result['name']."`".$result['vicinity'].";";    		
    	}
	}
?>

