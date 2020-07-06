
<?php
  $result = NULL;

	if (isset($_GET['term'], $_GET['location'])) {
		$term = $_GET['term'];
		$location = $_GET['location'];
		
		$limit = 20;


		if (isset($_GET['currentpage'])) {
            $currentpage = intval($_GET['currentpage']);
        } else {
            $currentpage = 1;
        }
        
    $offset = ($currentpage-1) * $limit;
        
    
    $query = http_build_query(array('term' =>$term , 'location'=>$location , 'offset'=>$offset,'limit'=>$limit));


	$api_url="https://api.yelp.com/v3/businesses/search?".$query;


    $api_secret=getenv('API_KEY');

	$ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , 'Authorization: bearer '.$api_secret));

 		$result = curl_exec($ch);
 		$data=json_decode($result, true);
        $total= $data['total'];
        $total_pages = ceil($total / $limit);
 
 		for ($i=1; $i < $total_pages; $i++) { 
 			echo "<a href=/views/search.php?term=".$_GET['term']."&location=".$_GET['location']."&currentpage=".$i.">".$i."</a>";
 		};

 		curl_close($ch);
	};

?>
