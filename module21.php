<?php

define('PI',3.14159);
$x=3;
$y=++$x;
$z=$x++; 
echo $x." ".$y." ".$x." ";
//5678
//4443
$n= 12;//decimal
$o=016;//octal
$h=0x2B;//hexadecimal

printf("%d %d %d" ,$n, $o,$h);
$hexadecimal = 'a37334';
echo base_convert($hexadecimal, 16, 2);

printf("binary of %d is %b \n", 1212,1212);
printf("octal of %d is %o\n", 1212,1212);
printf("hexa of %d is %X\n", 1212,1212);
printf("hexa to decimal of %X is %d\n", 0x2B,0x2B);

$test= "write";
echo $test;
echo "\n ";
$test="read";
echo $test;// mutable
echo "\n ";
//echo "value of pi ={PI}.PI";   wrong
echo constant('PI');//cnstant
echo "\n ";
echo "value of pi =".PI;//constant

$constant='constant';
echo "\n ";
echo "value of pi ={$constant('PI')}";//constant
echo "sadia yeasmin";
echo "\n";
echo "\n";
echo "\n";
$n1='s';
$n2='y';
$n3=0001;
var_dump($n1,$n2);//What type of variable?
var_dump($n3);

echo "<h2>PHP is Fun!</h2>";


?>