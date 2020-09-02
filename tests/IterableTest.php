<?php

class IterableTest extends \PHPUnit\Framework\TestCase {
  public function testIterator() {
    $collection = new \Tests\IntCollection(2,32,6);
    $result = 2 + 32 + 6;
    $sum = 0;
    foreach ($collection as $key => $item) {
      $sum += $item;
    }
    $this->assertEquals($result, $sum);
  }

  public function testIsCountable() {
    $collection = new \Tests\IntCollection(2,32,6);
    $this->assertEquals(3, count($collection));
  }
}
