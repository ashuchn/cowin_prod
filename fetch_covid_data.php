<?php 

$country = $_POST['country'];
// $date = $_POST['date'];

$url = "https://covid-19-data.p.rapidapi.com/country/code?code={code}" ;
// $url = "https://covid-19-data.p.rapidapi.com/country/code?code=in" ;

$url = str_replace("{code}", $country , $url);
// echo $url;exit;

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 2396fecf8bmshddf5c8ca5c98440p1bce64jsnd00b2f16e362"
	],
]);

curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} 
else{
    // echo $response;
}

$decode = json_decode($response ,true);
$data = $decode[0];
$aa = explode('T',$data['lastUpdate']);

$date = $aa[0];
$time = $aa[1];

// print_r($aa);exit;
?>
<p>Country Name: <span><?php echo $data['country']; ?></span> </p>
<p>Confirmed Cases: <span><?php echo number_format($data['confirmed']); ?></span> </p>
<p>Recovered Cases: <span><?php echo number_format($data['recovered']); ?></span> </p>
<p>Deaths: <span><?php echo number_format($data['deaths']); ?></span> </p>
<p>Last Updated: <span><?php echo $date.' at '.$time; ?></span> </p>