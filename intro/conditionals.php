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

 ?>
