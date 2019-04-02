<?php
include_once 'User.php';

class Worker extends User
{

    private $salary;

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}

$obj1 = new Worker("Иван",25);
$obj2 = new Worker("Вася", 26);

$obj1->setSalary(30000);
$obj2->setSalary(50000);

////$obj1->name = 'Иван';
////$obj1->age = '26';
////$obj1->salary = '2000';
//
////$obj1->setAge(18);
////$obj1->setName('Иван');
//$obj1->setSalary(30000);
////
////$obj1->setAge(50);

//echo $obj1->getAge() . '<br>';
//echo $obj1->getName() . '<br>';


echo $obj1->getSalary() + $obj2->getSalary();






