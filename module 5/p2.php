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

  function setColor(){
   
    $this->color=ltrim($colorCode,'#');
    $this->parsecolor();
}

private function parsecolor(){

    if($this->color)

   {
   // $colors=sscanf($this->color,'%02x%02x%02x');
  list($this->red,$this->green,$this->blue) =sscanf($this->color,'%02x%02x%02x');
    //print_r($colors);
    echo $this->red;
    echo $this->green;
    echo $this->blue;
   }
   else
   list($this->red,$this->green,$this->blue)=array(0,0,0);

}

}


$obj=new RGB('ffef27');

//$obj->getColor();


?>