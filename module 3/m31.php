<?php

for ($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5;$j++)
    {
          echo " * ";
    }
    echo PHP_EOL;
}

for ($i=1;$i<=5;$i++)
{echo PHP_EOL;
    for($j=1;$j<=$i;$j++)
    {
          echo $i;
    }
   // echo PHP_EOL;
}


?>