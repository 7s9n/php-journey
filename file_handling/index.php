<?php
  $file_name = 'text.txt';
  //Magic constants
  echo __FILE__ . '<br>'; // current file path C:\xampp\htdocs\php-journey\file_handling\index.php
  echo __DIR__ . '<br>'; // current folder C:\xampp\htdocs\php-journey\file_handling
  echo __LINE__ . '<br>'; // current line 5

  //Create directory
  mkdir('test');

  //Rename directory
  rename('test' , 'image_folder');

  //Delete directory
  rmdir('image_folder');

  // Read what is inside directory
  $files = scandir('../intro');
  echo '<pre>';
  print_r($files);
  echo '</pre>';
  //Reading files
  echo '<pre>';
  echo file_get_contents('../file_handling') . '<br>';
  echo file_get_contents('text.txt') . '<br>';
  echo readfile('text.txt') . '<br>';
  echo '</pre>';
  #second example
  $resource = fopen($file_name , 'r') or die("Unable to open file!");; // r denotes read mode.
  echo '<pre>';
  echo fread($resource , filesize($file_name)) . '<br>';
  echo '</pre>';
  fclose($resource);

  //Read Single Line
  $resource = fopen($file_name , 'r') or die("Unable to open file!");; // r denotes read mode.
  echo '<pre>';
  echo fgets($resource) . '<br>'; //Note: After a call to the fgets() function, the file pointer has moved to the next line.
  echo '</pre>';
  fclose($resource);

  //Check End-Of-File - feof()
  $resource = fopen($file_name , 'r') or die("Unable to open file!");; // r denotes read mode.
  echo '<pre>';
  #Output one line until end-of-file
  while (!feof($resource)){
    echo fgets($resource);
  }
  fclose($resource);
  echo '</pre>';
  echo '<br>';

  //Read Single Character - fgetc()
  $resource = fopen($file_name , 'r') or die("Unable to open file!");; // r denotes read mode.
  echo '<pre>';
  #Output one line until end-of-file
  while (!feof($resource)){
    echo fgetc($resource); //Note: After a call to the fgetc() function, the file pointer moves to the next character.
  }
  fclose($resource);
  echo '</pre>';
  echo '<br>';

  //Create/Write to files
  file_put_contents($file_name , 'Some content');

  $new_resource = fopen('newfile.txt' , 'w');
  $text = 'Hi this is a new file.' . PHP_EOL;
  fwrite($new_resource , $text);
  $text = 'This a new line.';
  fwrite($new_resource , $text);
  fclose($new_resource);

  /**
  we wrote to the file "newfile.txt" twice.
  Each time we wrote to the file we sent the string $txt that first contained "Hi this is a new file." ,
  and second contained "This a new line.". After we finished writing, we closed the file using the fclose() function.
  */
  //Check if File Already Exists
  file_exists('../intro/arrays.php'); // true
  file_exists('text.txt'); // true
  // Check if is directory / folder
  is_dir('../file_handling'); // true

  /**
  The file may be opened in one of the following modes:
  r Open a file for read only. File pointer starts at the beginning of the file.
  w Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist.
  File pointer starts at the beginning of the file.
  a Open a file for write only. The existing data in file is preserved.
  File pointer starts at the end of the file. Creates a new file if the file doesn't exist.
  x Creates a new file for write only. Returns FALSE and an error if file already exists.
  r+ Open a file for read/write. File pointer starts at the beginning of the file.
  w+ Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
  File pointer starts at the beginning of the file.
  a+ Open a file for read/write. The existing data in file is preserved.
  File pointer starts at the end of the file. Creates a new file if the file doesn't exist.
  x+ Creates a new file for read/write. Returns FALSE and an error if file already exists.
  */

  //https://www.php.net/manual/en/book.filesystem.php
?>
