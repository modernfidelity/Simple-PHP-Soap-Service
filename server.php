<?php

/**
 * 
 * SOAP SERVER v.0.1
 * 
 * @file
 * Provides a simple SOAP server for demo purposes
 * 
 */

// Load functions
require 'service_functions.php';

ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("simple.wsdl");

$server->AddFunction("getHello");
$server->AddFunction("getGoodbye");

$server->handle();

?>


