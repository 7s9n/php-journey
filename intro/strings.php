<?php
  //Create simple string
  $name = 'Hussein Sarea';
  $string_1 = "Hello I'm " . $name . ' and I,m ' . 22 . ' years old.';
  $string_2 = 'Hello ' . $name;
  echo $string_1 . '<br>';
  echo $string_2 . '<br>';
  //String concatenation
  echo "Hello " . "this's a php " . "script" . "<br>";

  //String functions
  echo substr($name , 0 ,7) . "<br>";  #return a sub string from 0 to 7 - 1 which's Hussein.
  echo substr($name , 8) . "<br>"; # #return a sub string from 8 to the end of the string which's Sarea.
  echo strtolower($name) . "<br>"; #convert string to lowercase.
  echo strtoupper($name . "<br>"); #convert string to uppercase.
  /**
  The strstr() function searches for the first occurrence of a string inside another string.
  Note: This function is binary-safe.
  Note: This function is case-sensitive. For a case-insensitive search, use stristr() function.
  */
  echo strstr("Hello World!" , "World") . "<br>"; #return World!
  echo strstr("Hello World!" , "World" , true) . "<br>"; #Return the part of the string before the first occurence of "world"
  echo stristr("hussein" , "Hussein") ."<br>"; # This's the same as strstr() the only difference is that it's case-insensitiv.

  /**
  The strlen() function returns the length of a string.
  */
  echo "$name length is: " . strlen($name) . "<br>";
  /**
  The strrev() function reverses a string.
  */
  echo strrev($name) . "<br>"; #Reverse the string
  /**
  The trim() function removes whitespace and other predefined characters from both sides of a string.
  */
  $str = "Hello World!";
  echo trim($str , "Hed!") . "<br>"; #Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World").

  /**
  The ltrim() function removes whitespace or other predefined characters from the left side of a string.
  */
  echo ltrim($str , "Hello") . "<br>";

  /**
  The rtrim() function removes whitespace or other predefined characters from the right side of a string.
  */
  echo rtrim($str , "World!") . "<br>";

  /**
  The str_word_count() function counts the number of words in a string.
  */
  echo str_word_count($str) . "<br>"; #Count the number of words found in the string "Hello World!":

  /**
  The strtok() function splits a string into smaller strings (tokens).
  */
  $string = "Hello world. Beautiful day today.";
  $token = strtok($string , " ");
  echo "<hr>";
  while ($token !== false) {
    echo $token . "<br>";
    $token = strtok(" ");
  }
  echo "<hr>";
  /**
  The ucwords() function converts the first character of each word in a string to uppercase.
  */
  $my_name = "hussein ahmed mohammed sarea";
  echo ucwords($my_name) . "<br>"; #returns Hussein Ahmed Mohammed Sarea
  /**
  The ucfirst() function converts the first character of a string to uppercase.
  */
  echo ucfirst("hello world!") . "<br>"; #Convert the first character of "hello" to uppercase.

  /**
  The lcfirst() function converts the first character of a string to lowercase.
  */
  echo lcfirst("Hello world!") . "<br>"; #Convert the first character of "Hello" to lowercase.

  $invoiceNumber = 100;
  $invoiceNumber2 = 123456;
  echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
  echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
  echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;

  // Multiline text and line breaks
  $long_text = "
  Hello I,m hussein ,
  and I,m 22 years old,
  I study information technology.
  ";
  echo $long_text . '<br>';
  echo nl2br($long_text) . '<br>';

  // Multiline text and reserve html tags
  $longText = "
    Hello, my name is <b>Hussein</b>
    I am <b>22</b>,
    I love Computer programming.
  ";
  echo "1 - " . $longText . '<br>';
  echo "2 - " . nl2br($longText) . '<br>';
  echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
  echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
  echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
  echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

  #PHP String Operators
  #PHP has two operators that are specially designed for strings.
  /**
  operator    Name                      Example           Result
  .           Concatenation             $txt1 . $txt2	    Concatenation of $txt1 and $txt2
  .=          Concatenation assignment	$txt1 .= $txt2	  Appends $txt2 to $txt1
  */
  $txt1 = "Hello";
  $txt2 = "world";
  echo $txt1 . " " . $txt2 . "<br>";
  $txt1 .= $txt2;
  echo $txt1 . "<br>";
 ?>
