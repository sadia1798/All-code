<?php
$string="The quick brown fox jumped over the lazy dog";

$word=str_word_count($string,1);

function c($a,$b)
{return strlen($b) -strlen($a);
}

usort($word,  'c');

print_r(array_shift($word));// it will print jumped

?>