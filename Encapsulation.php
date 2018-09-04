<?php
class Employee
{
    // property, field, attr, member var
    private $id;
    private $name;
    private $salary;
    private $gender;
    
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
