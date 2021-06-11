<?php
  //What is class and instance.
  #class is simply a blueprint.
  class Person{
    private ?int $id;
    private ?string $name;
    private ?int $age;
    private static $counter = 0;
    public function __construct($id , $name , $age){
      $this->id = $id;
      $this->name = $name;
      $this->age = $age;
      self::$counter++;
    } // end of __construct()
    public function get_id(){
      return $this->id;
    } // end of get_id()
    public function get_name(){
      return $this->name;
    } // end of get_name()
    public function get_age(){
      return $this->age;
    } // end of get_age()
    public static function get_counter(){
      return self::$counter;
    }
  } // end of person class

  $hussein = new Person(1 , 'Hussein Sarea' , 22); // this is the instance of the Person class.
  echo $hussein->get_name() . '<br>';
  echo $hussein->get_counter() . '<br>';
?>
