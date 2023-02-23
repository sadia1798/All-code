<?php

class RGB{

    private $color;// #
    private $red;
    private $green;
    private $blue;
function __construct($colorCode=''){

    $this->color=$colorCode;
    $this->parsecolor();
}

 function getColor(){
   
     return $this->color;
}

public function getrgbcolor(){

     return array($this->red,$this->blue,$this->green);
}

public function readrgbcolor(){

     echo "RED={$this->red}\nGREEN={$this->green}\nBLUE={$this->blue}";
    
}
  function setColor(){
   
    $this->color=ltrim($colorCode,'#');
    $this->parsecolor();
}

private function parsecolor(){

    if($this->color)

   {
   // $colors=sscanf($this->color,'%02x%02x%02x');
       //$this->red=$colors[0];
      // $this->green=$colors[1];

  list($this->red,$this->green,$this->blue) =sscanf($this->color,'%02x%02x%02x');// important
    //print_r($colors);
    //echo $this->red;
    //echo $this->green;
    //echo $this->blue;
   }
   else
   list($this->red,$this->green,$this->blue)=array(0,0,0);

}

function getRed(){
    return $this->red;
}
function getGreen(){
    return $this->green;
}
function getBlue(){
    return $this->blue;
}

}


$obj=new RGB('ff0000');

//$obj->getColor();

$obj->readrgbcolor();
echo $obj->getBlue(); 
?>