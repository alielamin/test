<?php
class Employee
{
    private $ID;
    private $taxRate;
    private $bonusRate;
    private $basicSalary;
    
    public function __construct($taxRate, $bonusRate, $basicSalary, $id="") 
    {
        $this->taxRate = $taxRate;
        $this->bonusRate = $bonusRate;
        $this->basicSalary = $basicSalary;
        $this->id = $id;
    }
    public function getTaxValue()
    {
        return $this->basicSalary * $this->taxRate;
    }
    public function getBonusValue()
    {
        return $this->basicSalary * $this->bonusRate;
    }
    public function getNetSalary()
    {
        return $this->basicSalary - $this->getTaxValue()+ $this->getBonusValue();
    }
    
    public static function getNoOfEmployees()
    {
        return 56566;
    }
}

// sara is new employee with salary 1000 and tax rate .02 and bonus rate .03
//$sara = new Employee(.02, .03, 1000);
//echo $sara->getNetSalary();

// call static function 

echo Employee::getNoOfEmployees();