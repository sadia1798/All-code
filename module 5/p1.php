<?php

class Fund
{
//public $fund;
private $fund;

function __construct($initialFund=0)
{
    $this->fund=$initialFund;
}
public function addfund($money)
{
    $this->fund+=$money;
    $this->deductFund(0);
}

public function deductFund($money)
{
          $this->fund-=$money;
}

public function getTotal()
{
    echo "total fund is {$this->fund}\n";
}
}

$ourFund = new Fund(100);
//$ourFund->fund=99;   can be accessed if piblic , private can not be accessed from outside like this
$ourFund->getTotal();
//echo $ourFund->fund;
$ourFund->addfund(100);
$ourFund->getTotal();
$ourFund->deductFund(5);
$ourFund->getTotal();
?>