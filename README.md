A simple PHP calculator that uses (abuses?) magic methods. Can be used like this:

```
$calculator = new Calculator();

$calculator->twoPlusFour();
$calculator->nineTimesEight()
$calculator->zeroMinusThree()
```

_Also_

A functional adder.

```
add(1)(); // 1

add(1)(2)(); // 3

add(1)(2)(3)(4)(5)(6)(7)(); // 28
```
