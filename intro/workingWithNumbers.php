<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //PHP has the following predefined constants for integers.
      print "INT_MAX is: " .PHP_INT_MAX ."<br>"; #The largest integer supported.
      print "INT_MIN is: " .PHP_INT_MIN ."<br>"; #The smallest integer supported.
      print "INT_SIZE is: " .PHP_INT_SIZE ."<br>"; #The size of an integer in bytes.

      //PHP has the following functions to check if the type of a variable is integer:
      echo (is_int(1) == 1 ? "true" : "false") . "<br>";
      echo (is_integer(1)== 1 ? "true" : "false") . "<br>"; #alias of is_int()
      echo (is_long(1)== 1 ? "true" : "false") . "<br>"; #alias of is_int()

      //PHP has the following predefined constants for floats (from PHP 7.2):
      print "FLOAT_MAX is: " .PHP_FLOAT_MAX ."<br>"; #The largest representable floating point number.
      print "FLOAT_MIN is: " .PHP_FLOAT_MIN ."<br>"; #The smallest representable positive floating point number.
      print "-FLOAT_MAX is: ".-PHP_FLOAT_MAX ."<br>"; #The smallest representable negative floating point number.
      print "FLOAT_DIG is: ".PHP_FLOAT_DIG  ."<br>"; #The number of decimal digits that can be rounded into a float and back without precision loss.
      print "FLOAT_EPSILON is: ".PHP_FLOAT_EPSILON  ."<br>"; #The smallest representable positive number x, so that x + 1.0 != 1.0.

      //PHP has the following functions to check if the type of a variable is float:
      echo (is_float(1.5) == 1 ? "true" : "false") . "<br>";
      echo (is_double(1.5)== 1 ? "true" : "false") . "<br>"; #alias of is_float()

      #PHP Infinity
      #A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

      //PHP has the following functions to check if a numeric value is finite or infinite:
      echo (is_finite(2) == 1 ? "true": "false") . "<br>";
      echo (is_finite(log(0)) == 1 ? "true": "false") . "<br>";
      echo (is_finite(2000)== 1 ? "true": "false") . "<br>";

      echo (is_infinite(2) == 1 ? "true": "false") . "<br>";
      echo (is_infinite(log(0)) == 1 ? "true": "false") . "<br>";
      echo (is_infinite(2000)== 1 ? "true": "false") . "<br>";

      #PHP NaN
      #NaN stands for Not a Number.
      #NaN is used for impossible mathematical operations.

      //PHP has the following functions to check if a value is not a number:
      echo (is_nan(200)== 1 ? "true": "false") . "<br>";
      echo (is_nan(acos(1.01)) == 1 ? "true": "false") . "<br>";

      //PHP Numerical Strings.
      /**
      The PHP is_numeric() function can be used to find whether a variable is numeric.
      The function returns true if the variable is a number or a numeric string, false otherwise.
      */
      $x = 5985;
      var_dump(is_numeric($x));

      $x = "5985";
      var_dump(is_numeric($x));

      $x = "59.85" + 100;
      var_dump(is_numeric($x));

      $x = "Hello";
      var_dump(is_numeric($x));
      echo "<br>";
      //PHP Casting Strings and Floats to Integers.

      #Sometimes you need to cast a numerical value into another data type.
      #The (int), (integer), or intval() function are often used to convert a value to an integer.

      // Cast float to int
      $x = 50.587;
      $int_cast = (int)$x;
      echo $int_cast . "<br>";

      // Cast string to int
      $x = "23465.768";
      $int_cast = (int)$x;
      $int_cast2 = intval($x);
      echo $int_cast . "<br>";
      echo $int_cast2 . "<br>";

     ?>
  </body>
</html>
