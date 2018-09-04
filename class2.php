<?php
class Arithmatic
{
    public $firstNumber;
    public $secondNumber;
    function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    function multiplcation()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    function division()
    {
        return ($this->secondNumber == 0)?
        "can not divide by zero":
        $this->firstNumber / $this->secondNumber;
    }
}


$arithmatic = new Arithmatic();
$arithmatic->firstNumber = 10;
$arithmatic->secondNumber = 11;
echo $arithmatic->addition();