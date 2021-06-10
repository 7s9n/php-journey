<?php
  //Function to print greetings
  function sayHello(){
    echo "Hello <br>";
  }

  //Calling function sayHello
  sayHello();

  //Function with argument and default value
  function sayHi($name = 'null'){
    echo "Hi , $name" . '<br>';
  }
  sayHi('Hussein');
  sayHi();
  //Function that return the sum of 2 number
  function getSum($first , $second){
    return $first + $second;
  }
  echo getSum(1 , 2) . '<br>';
  //Function to sum ... numbers
  function sum(...$nums){
    $sum = 0;
    foreach($nums as $num)
      $sum += $num;
    return $sum;
  }
  echo sum(1 , 2 , 3) . '<br>';
 ?>
