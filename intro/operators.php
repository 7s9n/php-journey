<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Operators are used to perform operations on variables and values.
      /**
      PHP divides the operators in the following groups:
      Arithmetic operators.
      Assignment operators.
      Comparison operators.
      Increment/Decrement operators.
      Logical operators.
      String operators.
      Array operators.
      Conditional assignment operators.
      */
      #PHP Arithmetic Operators
      #The PHP arithmetic operators are used with numeric values to perform common arithmetical operations,
      #such as addition, subtraction, multiplication etc.
      $x = 5;
      $y = 10;
      $result = 0;

      $result = $x + $y; // Addition
      echo "result: " . $result . "<br>"; //Sum of $x and $y

      $result = $x - $y; // Subtraction
      echo "result: " . $result . "<br>"; //Difference of $x and $y

      $result = $x * $y; // Multiplication
      echo "result: " . $result . "<br>"; //Product of $x and $y

      $result = $x / $y; // Division
      echo "result: " . $result . "<br>"; //Quotient of $x and $y

      $result = $x % $y; // Modulus
      echo "result: " . $result . "<br>"; //Remainder of $x divided by $y

      $result = $x ** $y; // Exponentiation
      echo "result: " . $result . "<br>"; //Result of raising $x to the $y'th power

      #PHP Assignment Operators
      #The PHP assignment operators are used with numeric values to write a value to a variable.
      #The basic assignment operator in PHP is "=".
      #It means that the left operand gets set to the value of the assignment expression on the right.

      $x = $y; //The left operand gets set to the value of the expression on the right
      echo "x: " . $x . "<br>";

      $x += $y; // same as x = x + y
      echo "x: " . $x . "<br>";

      $x -= $y; // same as x = x - y
      echo "x: " . $x . "<br>";

      $x *= $y; // same as x = x * y
      echo "x: " . $x . "<br>";

      $x /= $y; // same as x = x / y
      echo "x: " . $x . "<br>";

      $x %= $y; // same as x = x % y
      echo "x: " . $x . "<br>";

      #PHP Comparison Operators
      #The PHP comparison operators are used to compare two values (number or string):

      $x = 10;
      $y = 5;
      var_dump($x == $y); //Returns true if $x is equal to $y
      echo "<br>";

      var_dump($x === $y); //Returns true if $x is equal to $y, and they are of the same type
      echo "<br>";

      var_dump($x != $y); //Returns true if $x is not equal to $y
      echo "<br>";

      var_dump($x <> $y); //Returns true if $x is not equal to $y
      echo "<br>";

      var_dump($x !== $y); //Returns true if $x is not equal to $y, or they are not of the same type
      echo "<br>";

      var_dump($x > $y); //Returns true if $x is greater than $y
      echo "<br>";

      var_dump($x < $y); //Returns true if $x is less than $y
      echo "<br>";

      var_dump($x >= $y); //Returns true if $x is greater than or equal to $y
      echo "<br>";

      var_dump($x <= $y); //Returns true if $x is less than or equal to $y
      echo "<br>";

      var_dump($x <=> $y); //Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
      echo "<br>";

      #PHP Increment / Decrement Operators
      #The PHP increment operators are used to increment a variable's value.
      #The PHP decrement operators are used to decrement a variable's value.
      $x = 5;

      echo ++$x . "<br>"; //Pre-increment	Increments $x by one, then returns $x.
      echo $x++ . "<br>"; //Post-increment Returns $x, then increments $x by one.

      echo --$x . "<br>"; //Pre-decrement	Decrements $x by one, then returns $x.
      echo $x-- . "<br>"; //Post-decrement Returns $x, then decrements $x by one.

      echo "x is: $x <br>";

      #PHP Logical Operators
      #The PHP logical operators are used to combine conditional statements.
      /**
      operator  Example       Result
      and      $x and $y      True if both $x and $y are true
      or       $x or $y       True if either $x or $y is true
      xor      $x xor $y      True if either $x or $y is true, but not both
      &&       $x && &y       True if both $x and $y are true
      ||	     $x || $y       True if either $x or $y is true
      !          !$x          True if $x is not true
      */
      $x = 100;
      $y = 200;

      if ($x === 100 and $y === 200) {
        echo "Yes , x is 100 and y is 200 <br>";
      }
      if ($x === 100 or $y === 80) {
        echo "Hello condition is true <br>";
      }
      if ($x === 100 xor $y === 80) {
        echo "Hello condition is true <br>";
      }
      if ($x === 100 && $y === 200) {
        echo "Yes , x is 100 and y is 200 <br>";
      }
      if ($x === 100 || $y === 80) {
        echo "Hello condition is true <br>";
      }
      if (!0) {
        echo "Hello world <br>";
      }
     ?>
  </body>
</html>
