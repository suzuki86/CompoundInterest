<?php

class CompoundInterest {
  public static function calculate($currentPrincipal, $years, $interestRate, $annualAddition) {
    $result = $currentPrincipal;
    for ($x = 1; $x <= $years; $x++) {
      $result = $result * (1 + $interestRate) + $annualAddition;
    }
    return (int)floor($result);
  }
}
