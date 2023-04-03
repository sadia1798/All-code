
 
<?php
// TASK 2 ########################################

class Person {
  // Properties
  public $name;
  public $email;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
}

$a = new person();
$a->set_name('sadia');
$a->set_email('sadia@gmail.com');
echo "TASK 2 OF OOP";
echo "<br>";
echo "Name: " . $a->get_name();
echo "\n";
echo "<br>";
echo "Email: " . $a->get_email();
?>



<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>TASK 1 OF HTML FORM</h2>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <h2>Please input your email:</h2>
 
<input type="email" id="email" name="email">

<input type="submit" value="Submit "> 
 </form>
<?php
//TASK :1 ##########################################################################
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
$name1 = $_POST['email'];

echo "<h3> Hello $name </h3>";
echo "<h3> Hello $name1 </h3>";

?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>TASK 3 OF superglobal in php</h2>
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