<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>cs290 Assignment 4</title>
</head>
<body>
<?php 
$valid_input = true; //parameters passed via the URL in a GET request are valid
//first checking if parameters passed exist
if (!isset($_GET['min-multiplicand'])){
      //if parameters don't exist then valid input set to false and error thrown
	  echo "<h1>Missing min-multiplicand.</h1><br>";
      $valid_input = false;
    }
elseif(!isset($_GET['max-multiplicand'])){
	echo "<h1>Missing max-multiplicand.</h1><br>";
	$valid_input = false;
	}
elseif(!isset($_GET['min-multiplier'])){
	echo "<h1>Missing min-multiplier.</h1><br>";
	$valid_input = false;
	}
elseif(!isset($_GET['max-multiplier'])){
	echo "<h1>Missing max-multiplier.</h1><br>";
	$valid_input = false;
	}
