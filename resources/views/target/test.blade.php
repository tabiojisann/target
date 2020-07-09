<?php 

class User {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  final public function sayHi(){
    echo "Hello $this->name !";
  }
}

class SpecialUser extends User {
  public function sayHi(){
    echo "I am Special $this->name";
  }
}

$junya = new User("junya");
$kono  = new SpecialUser("kono");

$junya->sayHi();
$kono->sayhi();


  

?>





