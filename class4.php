<?php
class Arithmatic
{
    private $firstNumber;
    private $secondNumber;
    public function setValues($firstNum, $secondNum)
    {
        $this->firstNumber = $firstNum;
        $this->secondNumber = $secondNum;
    }
    public function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    public function multiplcation()
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
$arithmatic->setValues(10, 10);
echo $arithmatic->addition();