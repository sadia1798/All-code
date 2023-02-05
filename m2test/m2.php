<?php
$m = 90;

if ($m>=60)
{
	$g = "First Division";
}
else if($m>=45)
{
	$g = "Second Division";
}
else if($m>=33)
{
	$g = "Third Division";
}
else
{
	$g = "fail";
}

printf("grade is  :   %s ", $g);
?>