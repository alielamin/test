<?php
class Employee
{
    // property, field, attr, member var
    protected $id;
    protected $name;
    protected $salary;
    protected $gender;
    
    // behavior, method, action, member function
    public function __construct($name, $salary, $gender, $id="") 
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
        $this->gender = $gender;
    }
    public function addEmployee()
    {
        return "Add employee";
    }
    public static function deleteEmployeeById()
    {
        return "delete employee by id";
    }
    public function updateEmployee()
    {
        return "update employee";
    }
}

class Secratery extends Employee
{
    private $typeSpeed = 323232;
    public function setTypeSpeed($typeSpeed) 
    {
        $this->typeSpeed = $typeSpeed;
    }
    public function getTypeSpeed() 
    {
        return $this->typeSpeed;
    }

    public function salaryWithBonus()
    {
        return $this->getNetSalary() + 500;
    }
}

// sara is new secratery

$sara = new Secratery($name, $salary, $gender);
$sara->addEmployee();
$sara->getTypeSpeed();