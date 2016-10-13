<?php

/* make a URL small */ 
function make_bitly_url($url, $login, $appkey, $format = 'xml', $version = '2.0.1') 
{ 
	//create the URL 
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format; 
	//get the url 
	//could also use cURL here 
	$response = file_get_contents($bitly); 
	//parse depending on desired format 
	if(strtolower($format) == 'json') 
	{ 
		$json = @json_decode($response,true); 
		return $json['results'][$url]['shortUrl']; 
	} 
	else //xml 
	{ 
		$xml = simplexml_load_string($response); 
		return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash; 
	} 
} 


if($_REQUEST['action']) {
	
	$b = explode("\n", $_POST['name']); 

	$out .= "<table>";
	foreach ($b as $c) { 
		$c = trim($c); 
		$d = make_bitly_url($c,'tt0y', 'R_e37fc51dd0fd4deb97089a319e9130d7', 'json');
		$out .= 
			"<tr><td><a href='$d' target='_blank'>$d</a></td></tr>";
	}
	$out .= "</table>";
		
	echo $out;
}

?>