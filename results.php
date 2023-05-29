
<?php
// Created by: Graydon Ezzeddin
// Created on: May 2022
// This file contains the PHP functions for index.php

  // Declare product
  $product = 1;
   
  // Declare numbers
  $numbers = "";
  
  // Declare base and exponent
  $base = intval($_POST['base']);
  $exponent = intval($_POST['exponent']);
  
  // Error case for if user enters a string or nothing
  if (($exponent == 0) || ($base == 0) || ($base < 0) || ($exponent < 0)) {
    $numbers = "Please enter two positive integers as a base and an exponent.";
  } 
  
  else {
    // Use a for loop to calculate answer of the product of the base^exponent
    for ($counter = 1; $counter <= $exponent; $counter++) {
      $product *= $base;
    }
    // Declare Numbers
    $numbers = $base . '^' . $exponent . "=" . $product;
  }
  // DISPLAY PRODUCT
  echo $numbers;
?>