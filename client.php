<?php

/**
 * 
 * SOAP CLIENT v.0.1
 * 
 * @file
 * Provides an example PHP SOAP client
 * 
 */

try{

	$client = new SoapClient("simple.wsdl");

	$response = $client->getHello();
	
	print_r($response);
	
	
	
} catch(SoapFault $e){
	var_dump($e);
}








?>


