<?php
namespace Tests;

use Iterable\Iterator;

class IntCollection extends Iterator {
  public function __construct(int ...$items)
  {
    parent::__construct($items);
  }
}
