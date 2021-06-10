<?php
  //Create array
  $friends = ['Mohammed', 'yosef']; #the new style of creating array in php.
  //$friends_old_style = array('Mohammed' , 'yosef'); #old style

  //Print the whole array
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Get element by index
  echo $friends[0] . '<br>';

  //Set element by index
  $friends[0] = 'Rema';
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Check if array has element at index
  isset($friends[0]); // true
  isset($friends[3]); // false

  //Append element
  $friends[] = 'Mohammed';
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Print the length of the array
  echo count($friends) . '<br>';

  //Insert element at the end of the array
  array_push($friends , 'Motasm');
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Remove element from the end of the array
  echo array_pop($friends) .'<br>';
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  // Add element at the beginning of the array
  array_unshift($friends , 'Motasm');
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Remove element from the beginning of the array
  echo array_shift($friends) . '<br>';
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  //Split the string into an array
  $string_var = 'Hussein,Rema,Moataz , Ekram';
  echo '<pre>';
  var_dump(explode("," , $string_var));
  echo '</pre>';

  //Combine array element into string
  echo implode('&' , $friends);

  //Check if element exists in the array
  echo '<pre>';
  var_dump(in_array('Rema' ,$friends));
  echo '</pre>';

  // Get element's index in the array
  echo '<pre>';
  var_dump(array_search('Rema' ,$friends));
  echo '</pre>';

  //Merge two arrays
  $new_friends = ['Ahmed' , 'Ismaile'];
  echo '<pre>';
  var_dump(array_merge($friends , $new_friends)); // old style of merge
  var_dump( [...$friends , ...$new_friends] );
  echo '</pre>';

  //Sorting an array
  sort($friends); // sort in increasing order (ASC)
  //rsort($friends); // sort in decreasing order (DES)
  echo '<pre>';
  var_dump($friends);
  echo '</pre>';

  /**
    Associative arrays
  */
  // Create an associative array
  $person = [
    'name'=> 'Hussein',
    'lastname'=> 'Sarea',
    'age'=> 22,
    'hobbies'=>['programming', 'studying' , 'listenning to music']
  ];
  echo '<pre>';
  //var_dump($person);
  print_r($person);
  echo '</pre>';

  //Get element by key
  echo $person['name'] . '<br>'; // if key doesn't exist an erroe will occur
  //Set element by key
  $person['fathername'] = 'Ahmed';
  echo '<pre>';
  print_r($person);
  echo '</pre>';

  ////Null coalescing assignment operator. Since PHP 7.4
  if (!isset($person['address'])) {
    $person['address'] = "Sana'a";
  }
  $person['address'] ??= "Sana'a";
  echo '<pre>';
  print_r($person);
  echo '</pre>';

  //Check if array has specific key
  $search_array = array('first' => 1, 'second' => 4);
  if (array_key_exists('first', $search_array)) {
      echo "The 'first' element is in the array";
  }
  //isset() does not return true for array keys that correspond to a null value, while array_key_exists() does.
  $search_array = array('first' => null, 'second' => 4);

  // returns false
  isset($search_array['first']);

  // returns true
  array_key_exists('first', $search_array);
  //Print the key of the array
  echo '<pre>';
  var_dump(array_keys($person));
  echo '</pre>';

  //Print the values of the array
  echo '<pre>';
  var_dump(array_values($person));
  echo '</pre>';

  //Sort associative array by key / value
  ksort($person); // sort associative arrays in ascending order, according to the key
  //krsort($person) //sort associative arrays in descending order, according to the key
  //asort($person); //sort associative arrays in ascending order, according to the value
  //arsort($person); // sort associative arrays in descending order, according to the value
  echo '<pre>';
  var_dump($person);
  echo '</pre>';

  //Two dimensional array
  $board =
  [
    [1 , 2 , 3],
    [4 , 5 , 6],
    [7 , 8 , 9]
  ];
  $todos =
  [
    ['title'=> 'Cpp20' , 'Completed'=> false],
    ['title'=> 'java' , 'Completed'=> true],
    ['title'=> 'PHP' , 'Completed'=> false]
  ];
  echo '<pre>';
  var_dump($board);
  echo '</pre>';

  echo '<pre>';
  var_dump($todos);
  echo '</pre>';
  //https://www.php.net/manual/en/ref.array.php
 ?>
