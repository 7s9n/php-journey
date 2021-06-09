<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $x = 5 ;
      $y = 10;
      echo ($x + $y) . "<br>";

      //The pi() function returns the value of PI:
      echo "PI: " . PI() . "<br>"; # returns 3.1415926535898

      //The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
      echo "max: " . max(1 , 2 , 9 , 800 , -2 , 8) . "<br>"; #returns 800
      echo "min: " . min(1 , 2 , 9 , 800 , -2 , 8) . "<br>"; #returns -2

      //The abs() function returns the absolute (positive) value of a number:
      echo "abs: " . abs(-2.9) . "<br>"; # returns 2.9.

      //The sqrt() function returns the square root of a number:
      echo "sqrt: " . sqrt(36) . "<br>"; # returns 6.

      //The round() function rounds a floating-point number to its nearest integer:
      echo "round: " . round(0.60) . "<br>"; # returns 1.
      echo "round: " . round(0.49) . "<br>"; # returns 0.

      //The rand() function generates a random number:
      echo "rand: " . rand() . "<br>"; # returns random number.
      /**
      To get more control over the random number,
      you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
      For example, if you want a random integer between 1 and 10 (inclusive), use rand(1, 10):
      */

      echo "rand: " . rand(1 , 10) . "<br>"; # returns number between 1 - 10.

      //The ceil() function rounds a number UP to the nearest integer, if necessary.
      echo "ceil: " . ceil(1.60) . "<br>"; # returns 2.
      echo "ceil: " . ceil(1.49) . "<br>"; # returns 2.
      echo "ceil: " . ceil(1.1) . "<br>"; # returns 2.

      //The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.
      echo "floor: " . floor(1.60) . "<br>"; # returns 1.

      //The fmod() function returns the remainder (modulo) of x/y.
      echo "fmod: " . fmod(2 , 2) . "<br>"; # returns 0.
      echo "fmod: " . fmod(1 , 2) . "<br>"; # returns 1.

      //The log10() function returns the base-10 logarithm of a number.
      echo "log10: " . log10(3) . "<br>"; # returns 0.47712125471966.

      //The log(number , base) function returns the natural logarithm of a number, or the logarithm of number to base.
      echo "log: " . log(3) . "<br>"; # returns 1.0986122886681.

      //The pow() function returns x raised to the power of y.
      echo "pow: " . pow(2,3) . "<br>"; # returns 1.0986122886681.
     ?>
  </body>
</html>
