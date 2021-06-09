<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /**
      To create a constant, use the define() function.
      Syntax
      define(name, value, case-insensitive)
      parameters:
      name: Specifies the name of the constant
      value: Specifies the value of the constant.
      case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false.
      */

      //Create a constant:
      define("CELL_NUMBER", 20);
      echo CELL_NUMBER . "<br>";
     ?>
  </body>
</html>
