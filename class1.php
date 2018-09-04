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
        return $firstNumber / $secondNumber;
    }
}

// create object
$operation = new Arithmatic();
echo $operation->addition(10, 655);