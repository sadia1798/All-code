<?php
//1 no
function sortByLength ($a, $b) {
//uasort — Sort an array with a user-defined comparison function and maintain index association
      return strlen($b) - strlen($a);
  }
  
  $arr = ['longstring', 'string', 'thelongeststring'];
  
  uasort($arr, 'sortByLength');
  echo "1 question\n";
  print_r($arr);


 //2 no question
// First String
$a = 'Hello';
 
// Second String
$b = 'World!';
 
// Concatenation Of String
$c = $a." ".$b;
 
// print Concatenate String
echo "2 question\n";
echo "string concatenation: $c \n";

//3 no question
$arr = [1, 2, 3, 4, 5];
 
    $first = array_shift($arr);//The array_shift() function removes the first element from an array, and returns the value of the removed element.
    $last = array_pop($arr);//remove last element
    echo "3 question\n";
    print_r("The first item is " . $first . "\n");
    print_r("The first item is " . $last . "\n");
    print_r($arr);

//4 no question
$string = 'P racti ceCo de';
echo "4 question\n";
    if ( ctype_alpha($string) && ctype_space($string)) 
      
        echo "Yes\n :only letters and whitespace ";
    else 
        echo "No\n: not only letters and space";
echo "\n";
        //5 no
        echo "5 question\n";
 function secondHighest(array $arr) {
      //PHP provides several functions for sorting an array. After sorting, pick the element present at n-2 position where n is the size of an array.
            sort($arr);
            echo "second largest ";
            echo $arr[sizeof($arr)-2];
            }
            secondHighest(array( 1,2,3,4,5,6));

 
?>