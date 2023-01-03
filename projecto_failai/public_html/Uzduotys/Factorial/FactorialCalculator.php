<?php

require_once 'Calculator.php';
require_once 'traits/PositiveNumberChecker.php';

abstract class FactorialCalculator implements Calculator
{
    use PositiveNumberChecker;

    //Method checks if the nr. ir positive

    /**
     * @throws Exception
     */
    public function validate($number)
    {
        if (!$this->check($number)) {
            throw new Exception("Number must be positive");
        }
    }

    //Method must be implemented by the subclass
    abstract public function calculate($number);
}