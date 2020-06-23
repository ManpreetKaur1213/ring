
<?php
  $result = NULL;

	if (isset($_GET['term'], $_GET['location'])) {
		$term = $_GET['term'];
		$location = $_GET['location'];
		$total = 11;
		$limit = 2;


		if (isset($_GET['currentpage'])) {
            $currentpage = intval($_GET['currentpage']);
        } else {
            $currentpage = 1;
        }
        
    $offset = ($currentpage-1) * $limit;
        
    $total_pages = ceil($total / $limit);
    
    $query = http_build_query(array('term' =>$term , 'location'=>$location , 'offset'=>$offset,'limit'=>$limit));


	  $api_url="https://api.yelp.com/v3/businesses/search?".$query;


      $api_secret="M-UrVIi40m-K31av-glzYU0GAW6z58ZSdDAq3FYX4npIotIofOfcsSiudwY-nnkVNERUj9DIw5nAqNqYbsMdq5gh9Wtynmd3Wyyh4KaBafxZypfWksHuST9V-0CiXnYx";

	$ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , 'Authorization: bearer M-UrVIi40m-K31av-glzYU0GAW6z58ZSdDAq3FYX4npIotIofOfcsSiudwY-nnkVNERUj9DIw5nAqNqYbsMdq5gh9Wtynmd3Wyyh4KaBafxZypfWksHuST9V-0CiXnYx'));

 		$result = curl_exec($ch);
 		$data=json_decode($result, true);
 
 		for ($i=1; $i < $total_pages; $i++) { 
 			echo "<a href=/views/search.php?term=".$_GET['term']."&location=".$_GET['location']."&currentpage=".$i.">".$i."</a>";
 		};

 		curl_close($ch);
	};

?>
