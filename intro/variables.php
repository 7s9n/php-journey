<?php
  //what is a variavle

  //variable types
  /**
  String
  Integer
  Float
  Boolean
  Null
  Array
  Object
  Resource
  */
  //Declaring variablrs
  $name = "Hussein Sarea";
  $age = 22;
  $isMale = true;
  $height = 1.65;
  $salary = null;

  //Print the variables
  echo $name . '<br>';
  echo $age . '<br>';
  echo $isMale . '<br>';
  echo $height . '<br>';
  echo $salary . '<br>';
  //Print types of the variables
  echo gettype($name) . '<br>';
  echo gettype($age) . '<br>';
  echo gettype($isMale) . '<br>';
  echo gettype($height) . '<br>';
  echo gettype($salary) . '<br>';
  //Print the whole variable
  var_dump($name , $age , $isMale , $height , $salary);
  //Change the value of the variable
  $name = false;
  //Print type of the variable
  echo gettype($name) . '<br>';

  //Variable checking functions
  is_string($name); // false
  is_bool($isMale); // true
  is_int($age); // true #is_integer($age) , is_long($age);
  is_double($height); //true

  //Checking if variable is defined
  isset($name); // true
  isset($greetings); // false

  //Constants
  define('PI' , 3.14);
  echo PI . '<br>';

  //Useing PHP built-in constants
  //PHP has the following predefined constants for integers.
  print "INT_MAX is: " .PHP_INT_MAX ."<br>"; #The largest integer supported.
  print "INT_MIN is: " .PHP_INT_MIN ."<br>"; #The smallest integer supported.
  print "INT_SIZE is: " .PHP_INT_SIZE ."<br>"; #The size of an integer in bytes.

  //PHP has the following predefined constants for floats (from PHP 7.2):
  print "FLOAT_MAX is: " .PHP_FLOAT_MAX ."<br>"; #The largest representable floating point number.
  print "FLOAT_MIN is: " .PHP_FLOAT_MIN ."<br>"; #The smallest representable positive floating point number.
  print "-FLOAT_MAX is: ".-PHP_FLOAT_MAX ."<br>"; #The smallest representable negative floating point number.
  print "FLOAT_DIG is: ".PHP_FLOAT_DIG  ."<br>"; #The number of decimal digits that can be rounded into a float and back without precision loss.
  print "FLOAT_EPSILON is: ".PHP_FLOAT_EPSILON  ."<br>"; #The smallest representable positive number x, so that x + 1.0 != 1.0.
 ?>
