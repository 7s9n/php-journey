<?php
  /**
   *
   */
   require_once 'Person.php';
  class Student extends Person
  {
    private string $grade;

    function __construct($id , $name , $age , $grade)
    {
      parent::__construct($id , $name , $age);
      $this-> grade = $grade;
    }
  } // end of student class

?>
