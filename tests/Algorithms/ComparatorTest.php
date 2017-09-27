<?php

namespace Algorithms;

use PHPUnit\Framework\TestCase;

class ComparatorTest extends TestCase
{

  /** @var Comparator  */
  private $target;

  public function setUp()
  {
    $this->target = new Comparator();
  }

  public function testIntegersAreEquals()
  {
    $this->assertTrue(
      $this->target->equals(1, 1, 1)
    );
  }

  public function testArgumentsAreNotEquals()
  {
    $this->assertFalse($this->target->equals(1, 2, 1));
    $this->assertFalse($this->target->equals(1, 1, 2));
  }

}

