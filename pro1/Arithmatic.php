<?php
class Arithmatic
{
    function addition($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }
    function subtraction($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }
    function multiplcation($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }
    function division($firstNumber, $secondNumber)
    {
        return ($secondNumber == 0)?
                "can not divide by zero":
                $firstNumber / $secondNumber;
    }
}
