<?php

/**
 * @file
 * List of functions used by the PHP SOAP web service
 * 
 */

function getHello(){
	//in reality, this data would be coming from a database
	$string = "Hello MONKEY";
	return $string;
	
}

function getGoodbye(){
	//in reality, this data would be coming from a database
	$string = "Goodbye MONKEY";
	return $string;

}

?>