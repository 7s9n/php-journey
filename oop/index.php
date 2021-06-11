<?php
  //What is class and instance.
  #class is simply a blueprint.
  require_once 'Person.php';
  require_once 'Student.php';
  $hussein = new Person(1 , 'Hussein Sarea' , 22); // this is the instance of the Person class.
  $std = new Student(2 , 'Moataz Sarea' , 21 , 'second grade');
  echo '<pre>';
  var_dump($hussein);
  echo '</pre>';
  //echo $std->get_id();
  echo '<pre>';
  var_dump($std);
  echo '</pre>';
?>
