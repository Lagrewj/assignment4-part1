<?php
error_reporting(E_All);
ini_set('display_errors', 1);
	$keyValueArray = array();
	foreach($_GET as $key => $value){
		$keyValueArray[$key] = $value;
	}
	//if POST input
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$json->type = "POST";
		if(empty($_REQUEST)) { //if no parameters, then JSON object key to null
		$json->parameters = "null";
		} else {
			foreach($_REQUEST as $key => $value) { //adding key and value pair to the array
				$json->parameters[$key] = $value;
			}
		}
	//if GET input
	} else {
		$json->type = "GET";
		if(empty($_REQUEST) == 0) {
		$json->parameters = "null";
		} else {
			foreach($_REQUEST as $key => $value) { //adding key and value pair to the array
				$json->parameters[$key] = $value;
			}
		}
	}
	//returns the JSON representation of a value
	echo json_encode($json); //output json to the user
//references
//1. http://php.net/manual/en/function.json-encode.php
?>
