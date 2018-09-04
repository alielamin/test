<?php
$dbh = new PDO("mysql:dbhost=localhost;dbname=test","root","");
class Employee
{
    // property, attrs, fields, member vars
    private $id;
    private $name;
    private $salary;
    // bahvior, action, method, member function 
    public function __construct($name, $salary, $id="") 
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = $id;
    }
    public function addEmployee()
    {
        global $dbh;
        $sql= $dbh->prepare("INSERT INTO employee(name, salary) VALUES('$this->name','$this->salary')");
        $sql->execute();
    }
    
    public function updateEmployee()
    {
        global $dbh;
        $sql= $dbh->prepare("UPDATE employee SET name='$this->name', salary = '$this->salary' WHERE id='$this->id'");
        $sql->execute();
    }
    
    public static function retreiveEmployeeById($id)
    {
        global $dbh;
        $sql= $dbh->prepare("SELECT * FROM employee WHERE id='$id'");
        $sql->execute();
        $employee = $sql->fetch(PDO::FETCH_ASSOC);
        return $employee;
    }
    
    public static function retreiveAllEmployees()
    {
        global $dbh;
        $sql= $dbh->prepare("SELECT * FROM employee");
        $sql->execute();
        $allEmployees = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $allEmployees;
    }
    
    public static function deleteEmployeeById($id)
    {
        global $dbh;
        $sql= $dbh->prepare("DELETE FROM employee WHERE id='$id'");
        $sql->execute();
    }
}

// add
/*
$sara = new Employee("Sara Hossam", 15000000);
$sara->addEmployee();
 * 
 */

// update
$sara = new Employee("Sara Hossam Ahmed", 154545454, 1);
//$sara->updateEmployee();

// retreive employee by id

//print_r(Employee::retreiveEmployeeById(1));

// retreive all employees

//print_r(Employee::retreiveAllEmployees());

// DELETE EMPLOYEE 

Employee::deleteEmployeeById(1);