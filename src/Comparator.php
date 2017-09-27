<?php

namespace Algorithms;

class Comparator
{

  /**
   * @param mixed $a
   * @param mixed $b
   * @param mixed $c
   * @return bool
   */
  public function equals($a, $b, $c)
  {
    return ($a == $b) && ($a == $c);
  }

}

