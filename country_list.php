<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/help/countries",
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
} else {
	// echo $response;
}

$decode = json_decode($response, true);
// print_r($decode);

echo "<option value=''>---Select---</option>";
foreach($decode as $rows){?>

<option value="<?php echo $rows['alpha2code']; ?>"><?php echo $rows['name'] .' , '. $rows['alpha2code'] ?></option>

<?php }

?>