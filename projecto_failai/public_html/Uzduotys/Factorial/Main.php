<?php

require_once "ConcreteFactorialCalculator.php";

class Main
{
    /**
     * @throws Exception
     */
    public static function run(): void
    {
        $calculator = new ConcreteFactorialCalculator();
        $result = $calculator->calculate();
        echo $result; //Outputs 24
    }
}