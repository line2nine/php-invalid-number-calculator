<?php

class Calculator
{
    public function sum($numberOne, $numberTwo)
    {
        if ($numberOne / 2 + $numberTwo / 2 >= PHP_INT_MAX / 2) {
            throw new Exception("Number too larger");
        }

        return $numberOne + $numberTwo;
    }

    public function sub($numberOne, $numberTwo)
    {
        if ($numberOne / 2 - $numberTwo / 2 < PHP_INT_MAX / 2) {
            throw new Exception("Number too smaller");
        }

        return $numberOne - $numberTwo;
    }

    public function multi($numberOne, $numberTwo)
    {
        return $numberOne * $numberTwo;
    }

    public function division($numberOne, $numberTwo)
    {
        if ($numberTwo == 0) {
            throw new Exception("Number to div is not 0");
        }

        return $numberOne / $numberTwo;
    }
}