<?php
class Arithmatic
{
    public $firstNumber;
    private $secondNumber;
    public function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    private function multiplcation()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    public function division()
    {
        return ($this->secondNumber == 0)?
        "can not divide by zero":
        $this->firstNumber / $this->secondNumber;
    }
}

$arithmatic = new Arithmatic();
$arithmatic->secondNumber = 10;