
<?php
  $result = NULL;

	if (isset($_GET['term'], $_GET['location'])) {
		$term = $_GET['term'];
		$location = $_GET['location'];
		$query = http_build_query(array('term' =>$term , 'location'=>$location));


	$api_url="https://api.yelp.com/v3/businesses/search?".$query;

	// echo $api_url;
	

	$api_secret="M-UrVIi40m-K31av-glzYU0GAW6z58ZSdDAq3FYX4npIotIofOfcsSiudwY-nnkVNERUj9DIw5nAqNqYbsMdq5gh9Wtynmd3Wyyh4KaBafxZypfWksHuST9V-0CiXnYx";

	$ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $api_url);

 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 

 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , 'Authorization: bearer M-UrVIi40m-K31av-glzYU0GAW6z58ZSdDAq3FYX4npIotIofOfcsSiudwY-nnkVNERUj9DIw5nAqNqYbsMdq5gh9Wtynmd3Wyyh4KaBafxZypfWksHuST9V-0CiXnYx'));

 		$result = curl_exec($ch);
 

 		curl_close($ch);
	};

?>
