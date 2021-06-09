<?php
  // Declaring numbers
  $a = 5;
  $b = 4;
  $c = 1.8;

  // Arithmetic operations
  echo $a + $b . '<br>'; #Sum of $x and $y
  echo $a - $b . '<br>'; #Difference of $a and $b
  echo $a * $b . '<br>'; #Product of $a and $b
  echo $a / $b . '<br>'; #Quotient of $a and $b
  echo $a % $b . '<br>'; #Remainder of $a divided by $b
  echo $a ** $b . '<br>'; #raising $a to the $b'th power

  //Assignment operators
  $a = $b; //The left operand gets set to the value of the expression on the right
  $a += $b; // same as a = a + b
  $a -= $b; // same as a = a - b
  $a *= $b; // same as a = a * b
  $a /= $b; // same as a = a / b
  $a %= $b; // same as a = a % b

  //Increment / Decrement operators
  $x = 5;
  echo ++$x . "<br>"; // 6 - Pre-increment	Increments $x by one, then returns $x.
  echo $x++ . "<br>"; // 6 - Post-increment Returns $x, then increments $x by one.
  echo --$x . "<br>"; //6  - Pre-decrement	Decrements $x by one, then returns $x.
  echo $x-- . "<br>"; //6  - Post-decrement Returns $x, then decrements $x by one.

  //Number checking functions
  is_float(1.25); // true
  is_double(1.25); // true
  is_int(2); // true
  is_numeric("3.45"); // true
  is_numeric("3g.25"); // false

  // Conversion /Casting
  $string_number = '250.30';
  $number = (int)$string_number;
  $number = intval($string_number);
  var_dump($number);
  $number = floatval($string_number);
  var_dump($number);
  echo '<br>';
  //Number functions
  echo "abs(-90): " . abs(-90) . '<br>';
  echo "pow(2 , 3): " . pow(2 , 3) . '<br>';
  echo "sqrt(36): " . sqrt(36) . '<br>';
  echo "max(2 , 3 , -500): " . max(2 , 3 , -500) . '<br>';
  echo "min(2 , 3 , -500): " . min(2 , 3 , -500) . '<br>';
  echo "round(2.4): " . round(2.4) . '<br>';
  echo "floor(2.7): " . floor(2.7) . '<br>';
  echo "ceil(2.4): " . ceil(2.4) . '<br>';
  echo "ceil(2.6): " . ceil(2.6) . '<br>';
  echo "fmod(2 , 2): " . fmod(2 , 2) . "<br>";
  echo "fmod(1 , 2): " . fmod(1 , 2) . "<br>";
 ?>
