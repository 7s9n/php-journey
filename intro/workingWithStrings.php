<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = "Hussein Sarea";
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
     ?>
  </body>
</html>
