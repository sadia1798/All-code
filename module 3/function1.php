<?php
//Comission calculator

function calculate_commission($tuitionFee) {
  return $tuitionFee>= 20000 ? 0.25 * $tuitionFee : ($tuitionFee>= 10000 ? 0.2 * $tuitionFee : ($tuitionFee >= 7000 ? 0.15 * $tuitionFee : "Invalid data"));
}

$tuitionFee = 15000;
$commission = calculate_commission($tuitionFee);

if ($commission != "Invalid data") {
  echo "The commission for a tuition fee of $tuitionFee is $commission.";
} else {
  echo "The tuition fee is less than 7000 dollars, data is invalid.";
}

?>