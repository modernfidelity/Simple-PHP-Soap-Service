<?php

/**
 * 
 * SOAP CLIENT v.0.1
 * 
 * @file
 * Provides an example PHP SOAP client
 * 
 * @author 
 * Mark Rushton
 * 
 */

try{

	$client = new SoapClient("simple.wsdl");

	$response = array();
	
	$response['helloResponse'] = $client->getHello();
	
	$response['goodbyeResponse'] = $client->getGoodbye();
	
	print "<pre>";
	print_r($response);
	print "</pre>";
	
} catch(SoapFault $e){
	
	var_dump($e);

}

?>


