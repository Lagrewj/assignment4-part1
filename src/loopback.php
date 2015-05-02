<?php
error_reporting(E_All);
ini_set('display_errors', 1);
	$keyValueArray = array(); 
	foreach($_POST as $key => $value){ //adding key and value pair to the array
		$keyValueArray[$key] = $value;
	}
	//if POST input
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$arrayPost = array("Type" => "POST", "parameters" => $keyValueArray);
		echo json_encode($arrayPost); //returns the JSON representation of a value
	}
	foreach($_GET as $key => $value){ //adding key and value pair to the array
		$keyValueArray[$key] = $value;
	}
	//if GET input
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		$arrayGet = array("Type" => "GET", "parameters" => $keyValueArray);
		echo json_encode($arrayGet); //returns the JSON representation of a value 
		//returns the JSON representation of a value
	}
	
	
//references
//1. http://php.net/manual/en/function.json-encode.php
?>
