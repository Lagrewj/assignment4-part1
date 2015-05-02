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
    else //checking to see if variables are integers. If not then setting valid input to false
    {
      $min_multicand = $_GET['min-multiplicand'];
      $max_multicand = $_GET['max-multiplicand'];
      $min_multiplier = $_GET['min-multiplier'];
      $max_multiplier = $_GET['max-multiplier'];
      
      if(!is_numeric($min_multicand) || strpos($min_multicand, ".") !== false){
          echo "<h1>$min_multicand must be an integer.</h1><br>";
          $valid_input = false;
      }
      if(!is_numeric($max_multicand) || strpos($max_multicand, ".") !== false){
          echo "<h1>$max_multicand must be an integer.</h1><br>";
          $valid_input = false;
      }
      if(!is_numeric($min_multiplier) || strpos($min_multiplier, ".") !== false){
          echo "<h1>$min_multiplier must be an integer.</h1><br>";
          $valid_input = false;
      }
      if(!is_numeric($max_multiplier ) || strpos($max_multiplier, ".") !== false){
          echo "<h1>$max_multiplier must be an integer.</h1><br>";
          $valid_input = false;
      }
	  //data validation that min is less than max
      if ($min_multicand > $max_multicand){
        echo "<h1>$min_multicand larger than $max_multicand.</h1><br>";
        $valid_input = false;
      }
      if ($min_multiplier > $max_multiplier){
        echo "<h1>$min_multiplier larger than $max_multicand.</h1><br>";
        $valid_input = false;
      }
