<?php

require_once 'src/CompoundInterest.php';

use CompoundInterest\CompoundInterst;

class CompoundInterstTest extends PHPUnit_Framework_TestCase {
  public function testCalculate() {
    $actual = CompoundInterest::calculate(10000, 1, 0.05, 0);
    $expected = 10500;
    $this->assertSame($expected, $actual);

    $actual = CompoundInterest::calculate(10000, 2, 0.05, 100);
    $expected = 11230;
    $this->assertSame($expected, $actual);
  }
}
