<?php

require_once 'src/CompoundInterest.php';

use CompoundInterest\CompoundInterest;

class CompoundInterestTest extends PHPUnit_Framework_TestCase {
  public function testCalculate() {
    $actual = CompoundInterest::calculate(10000, 1, 5, 0);
    $expected = 10500;
    $this->assertSame($expected, $actual);

    $actual = CompoundInterest::calculate(10000, 2, 5, 100);
    $expected = 11230;
    $this->assertSame($expected, $actual);
  }
}
