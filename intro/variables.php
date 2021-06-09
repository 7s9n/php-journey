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
 ?>
