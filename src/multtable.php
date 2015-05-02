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
if (!isset($_GET['min-multiplicand']) || !isset($_GET['max-multiplicand']) || !isset($_GET['min-multiplier']) ||!isset($_GET['max-multiplier']) ){
      //if parameters don't exist then valid input set to false and error thrown
	  echo "<h1>Missing a parameter.<h1>";
      $valid_input = false;
    }
