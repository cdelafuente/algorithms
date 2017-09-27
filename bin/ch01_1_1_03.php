<?php

use Algorithms\Comparator;

require_once(__DIR__ . '/../vendor/autoload.php');

if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3]))
{
  throw new InvalidArgumentException('Required arguments missing.');
}

$comparator = new Comparator();

if ($comparator->equals($argv[1], $argv[2], $argv[3]))
{
  echo "equal\n";
}
else
{
  echo "not equal\n";
}
