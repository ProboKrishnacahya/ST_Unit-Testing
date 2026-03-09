<?php
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }

        return $a / $b;
    }

    public function power($a, $b)
    {
        return pow($a, $b);
    }

    public function squareRoot($a)
    {
        if ($a < 0) {
            throw new InvalidArgumentException("Square root of a negative number is not allowed.");
        }
        return sqrt($a);
    }
}
