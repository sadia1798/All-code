<?php
$tutionFee = 8000;

if($tutionFee>20000)
{
    $c1=$tutionFee*.25;
    $c="$c1";
	
}
else if($tutionFee>10000 && $tutionFee<=20000)
{
    $c1=$tutionFee*.20;
    $c="$c1";
	
}
else if($tutionFee>=7000 && $tutionFee<=10000)
{
    $c1=$tutionFee*.15;
    $c="$c1";

}
else if($tutionFee<7000)
{
	$c = "invalid data";
}

printf("commission  : %s  ",$c);


//$commission=($tutionFee>20000).( $c1=$tutionFee*.25)?("$c1"):(( $tutionFee<=20000 && $tutionFee>10000).( $d1=$tutionFee*.20)?("$d1"):(($tutionFee>=7000 && $tutionFee<=10000).( $f1=$tutionFee*.15)?("$f1"):("invalid")));
//echo "$commission";
echo "\n";


//$number = -2;
//echo ($number > 0 ? 'Positive' : ($number < 0 ? 'Negative' : 'Zero'));
//$i= ($number > 0)?('Positive'):(($number < 0)?('Negative'):('Zero'));

//$commission1= ($tutionFee>20000)?(".25"):(($tutionFee<=20000 && $tutionFee>10000).( $d1=$tutionFee*.20)?("$d1"):('invalid'));
//echo"$commission1";
echo"\n";
$i4= ($tutionFee<7000)?("invalid"):("invalid");
$i3=($tutionFee>=7000 && $tutionFee<=10000).( $c1=$tutionFee*.15)?("$i2"):($i4);
$i2=($tutionFee>10000 && $tutionFee<=20000).( $c1=$tutionFee*.20)?("$i2"):($i3);
$i= ($tutionFee>20000).( $c1=$tutionFee*.25)?("$c1"):($i2);
//$i2=($tutionFee>10000 && $tutionFee<=20000).( $c1=$tutionFee*.20)?("$i2"):($i3);
//$i3=($tutionFee>=7000 && $tutionFee<=10000).( $c1=$tutionFee*.15)?("$i2"):($i4);
//$i4= ($tutionFee<7000)?("invalid"):("invalid");


?>
