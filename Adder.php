<?php

/**
 * Adds numbers together! 🧮
 */
function add($number = null)
{
  return is_null($number) ? $number : fn ($nextNumber = null) => is_null($nextNumber) ? $number : add($nextNumber + $number);
}

// Examples
$result = add(1)();
echo $result . "\n";

$result = add(1)(2)();
echo $result . "\n";

$result = add(1)(2)(3)(4)(5)(6)(7)();
echo $result . "\n";
