<?php

class Calculator
{
  private $numbers = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
  private $symbols = ['+' => 'plus', '-' => 'minus', '*' => 'times'];

  public function __call(string $name, $_)
  {
    $arguments = $this->parseArguments($name);

    return eval('return ' . implode(' ', $arguments) . ';');
  }

  private function parseArguments(string $name)
  {
    $arguments = explode(',', strtolower(preg_replace('/(?<!^)[A-Z]/', ',$0', $name)));
    return array_map(function ($argument) {
      $key = array_search($argument, $this->numbers);

      if (is_numeric($key)) {
        return $key;
      }

      $key = array_search($argument, $this->symbols);

      if ($key !== false) {
        return $key;
      }

      throw new Exception("$argument is not a valid argument");
    }, $arguments);
  }
}

// sample usage
$calculator = new Calculator();
echo $calculator->twoPlusFour() . "\n";
echo $calculator->nineTimesEight() . "\n";
echo $calculator->zeroMinusThree() . "\n";
