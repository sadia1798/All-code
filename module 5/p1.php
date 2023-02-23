<?php

class Fund
{
public $fund;

function __construct($initialFund=0)
{
    $this->fund=$initialFund;
}
public function addfund($money)
{
    $this->fund+=$money;
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
//$ourFund->fund=99;
$ourFund->getTotal();
//echo $ourFund->fund;
$ourFund->addfund(100);
$ourFund->getTotal();
$ourFund->deductFund(50);
$ourFund->getTotal();
?>