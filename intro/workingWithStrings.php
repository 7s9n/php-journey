<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = "Hussein Sarea";
      echo substr($name , 0 ,7) . "<br>"; # Hussein
      echo substr($name , 8) . "<br>"; # Sarea
      echo strtolower($name) . "<br>";
      echo strtoupper($name);
     ?>
  </body>
</html>
