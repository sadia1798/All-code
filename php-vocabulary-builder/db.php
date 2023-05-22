<?php

$dbHost= "localhost";

$dbUser="root";
$dbPass="";
$dbName="words";

$con=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($con){

}
else{
    die("failed");
}



?>