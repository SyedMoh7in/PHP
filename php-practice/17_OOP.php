<?php
//Public Data types can be accessed anywhere
//Private  can only be accessed inside the class
//Protected can only be accessed inside the class and inherited class
class User{
    //Properties are attributes that belong to a class
    public $id;
    public $name;
    public $email;

    //Constructor is a method when that runs when an object is created
    public function __construct($id,$name,$email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    //Method is a function belonging to a class
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
//Instantiate a User Object
$user1=new User("2180117","Mohsin","rmohsin609@gmail.com");
// $user2=new User();
// $user1->id="2180117";
// $user1->name="Mohsin";
// $user1->email= "rmohsin609@gmail.com";
// var_dump($user1);
// echo $user1->name;
// $user2 ->set_name("Khizer");
// var_dump($user2);
// echo $user1->get_name();
echo $user1->id;
echo $user1->name;
echo $user1->email;

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User {
    public function __construct($name, $email, $password, $title) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
    }
  
    public function getTitle() {
      return $this->title;
    }
  }
  
  $employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
  echo $employee1->getTitle();
?>