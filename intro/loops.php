<?php
  // // while
  // while (true) { // Infinite loop: DON'T run this
  //     // Do something constantly
  // }
  // Loop with $counter
  // $counter = 1;
  // while ($counter <= 10) {
  //   echo "$counter <br>";
  //   ++$counter;
  // }

  //// do - while
  $counter = 1;
  do {
    $counter++;
    echo "$counter";
  } while ($counter <= 1);

  // for
  for ($i = 0; $i < 10; $i++) {
      echo $i."<br>";
  }
  // foreach
  $fruits = ["Banana", "Apple", "Orange"];
  foreach ($fruits as $i => $fruit) {
      echo $i . ' ' . $fruit . '<br>';
  }

  // Iterate Over associative array.
  $person = [
      'name' => 'Hussein',
      'lastname' => 'Sarea',
      'age' => 22,
      'hobbies' => ['programming', 'listenning to music'],
  ];
  foreach ($person as $key => $value) {
    if (is_array($value)) {
      echo $key . ' ' . implode(',' , $value) . '<br>';
    }else {
      echo $key . ' ' . $value . '<br>';
    }
  }
 ?>
