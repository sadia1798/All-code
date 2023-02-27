<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <h2>Please input your email:</h2>
 
<input type="email" id="email" name="email">

<input type="submit" value="Submit "> 
 </form>
<?php


class Person {
    // Properties
    public $name;
    public $email;
  
    // Methods
    function set_name($name) {
      $this->name = $_POST['name'];
    }
    function get_name() {
      return $this->name;
    }
    function set_email($email) {
      $this->email = $_POST['email'];
    }
    function get_email() {
      return $this->email;
    }
  }
  echo "<br>";
  echo "<br>";
 echo "TASK 3";
 echo "<br>";
 echo "<br>";
 
  $b=new person();
  $b->set_name($_POST['name']);
  $b->set_email($_POST['email']);
  echo "Name: " . $b->get_name();
  echo "\n";
  echo "<br>";
  echo "Email: " . $b->get_email();


?>
</body>
</html>