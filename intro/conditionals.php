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
  $age === '20' //false
 ?>
