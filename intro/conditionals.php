<?php
  $age = 20;
  $salary = 300000;

  // Sample if
  if ($age === 20) {
    echo "1" . '<br>';
  }
  //Without braces
  if ($age === 20)
    echo "1" . '<br>';

  //Sample if-else
  if ($age > 20) {
    echo '1';
  }else {
    echo '2';
  }

  //Difference between == and ===
  $age == 20; // true
  $age == '20'; //true

  $age === 20; // true
  $age === '20'; //false

  //if and / &&
  if ($age <= 20 and $salary == 300000) {
    echo "2 condition are true";
  }
  // if OR / ||
  if ($age > 20 or $salary === 300000) {
    echo "string";
  }
  // Ternary if
  echo $age < 22 ? 'Young' : 'Old';
  echo '<br>';

  // Short ternary
  $myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

  // Null coalescing operator
  $var = isset($name) ? $name : 'John';
  $var = $name ?? 'John'; // Equivalent of above
  echo $var.'<br>';

  // switch
  $userRole = 'admin'; // admin, editor, user

  switch ($userRole) {
      case 'admin':
          echo 'You can do anything<br>';
          break;
      case 'editor';
          echo 'You can edit content<br>';
          break;
      case 'user':
          echo 'You can view posts and comment<br>';
          break;
      default:
          echo 'Unknown role<br>';
  }
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
