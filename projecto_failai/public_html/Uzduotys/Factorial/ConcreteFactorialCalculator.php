<?php

require_once 'FactorialCalculator.php';

class ConcreteFactorialCalculator extends FactorialCalculator
{
    /**
     * @throws Exception
     */
    public function calculate($number): int
    {
        $this->validate($number);
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
