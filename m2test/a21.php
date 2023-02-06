<?php
$tutionFee = 9000;




$commissionCalc=(($tutionFee>20000)?($d1=$tutionFee*.25):(($tutionFee<=20000 && $tutionFee>10000)?($d1=$tutionFee*.20):
(($tutionFee>=7000 && $tutionFee<=10000)?( $d1=$tutionFee*.15):(($tutionFee<7000 )?("invalid"):("Data invalid")))));

echo "Commission is $commissionCalc";


//HF consultancy wants to build a very simple commission-calculating calculator for their admission agents. 
//Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars.
// But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. 
//If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars, 
//the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid.
// As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
?>

