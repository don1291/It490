<?php
/*
     function buildAuthorizationParameters($apiKey, $sharedSecret) {
         $paramsToEncode = $apiKey.$sharedSecret.time();
         $encodedParams = hash('sha256', $paramsToEncode);
         
         $result = sprintf('apikey=%s&sig=%s', $apiKey, $encodedParams);
         
         return $result;
     }
     
     function getResponseFromParameters($parameters) {
         
         $baseUri = 'http://api.fandango.com';
         $apiVersion = '1';
         
         // Use your account-specific values here
         $apiKey = 'w9vqpr3z7tsvs2cpey68r9rt';
         $sharedSecret = 'TjYu9xjTK2';
         
         $authorizationParameters = buildAuthorizationParameters($apiKey, $sharedSecret);
         
         $requestUri = sprintf('%s/v%s/?%s&%s', $baseUri, $apiVersion, $parameters, $authorizationParameters);
         
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $requestUri);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $result = curl_exec($ch);
         
         return $result;
     }
     
     header('Content-type: text/xml');
     $zipCode = '90064';
     $parameters = sprintf('op=theatersbypostalcodesearch&postalcode=%s', $zipCode);
     
     echo getResponseFromParameters($parameters);
  */

	$zipcode = $_GET['zipcode'];
	$request = "http://api.fandango.com/v1/?op=performancesbymoviepostalcodesearch&movieid=151500&postalcode=94105&apikey=&sig=w9vqpr3z7tsvs2cpey68r9rt";
	
	$fp = fopen($request, "r");
	$contents = "";
	
	while ($more = fread($fp, 1000)){
		$contents .= $more;
	}
	echo $contents;
?>