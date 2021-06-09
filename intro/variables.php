<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $characterName = 'Hussein Sarea'; # string variable
      $characterAge = 22; # integer variable
      echo "<p>There once was a man named $characterName </p>";
      echo "<p>He was $characterAge years old </p>";
      $characterName = "Rema";
      echo "<p>He really liked the name ". substr($characterName ,0 , 7). "</p>"; # use . to concatenate two strings
      echo "<p>But didn't like being $characterAge <p>";
     ?>
  </body>
</html>
