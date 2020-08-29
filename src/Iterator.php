<?php
namespace Iterable;

abstract class Iterator implements \Iterator {
  private array $items;
  private $position = 0;

  public function __construct($items) {
    $this->items = $items;
  }

  public function getItems(): array
  {
    return $this->items;
  }

  public function current()
  {
    return $this->items[$this->position];
  }

  public function next(): void
  {
    ++$this->position;
  }

  public function key(): int
  {
    return $this->position;
  }

  public function valid(): bool
  {
    return isset($this->items[$this->position]);
  }

  public function rewind(): void
  {
    $this->position = 0;
  }
}
