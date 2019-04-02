<?php


class Worker
{
    private $temp;
//    public $name;
    private $name;

//    public $age;
    private $age;

//    public $salary;
    private $salary;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setAge($age)
    {
        $this->checkAge($age);

    }

    function getAge()
    {
        return $this->age;
    }

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if ($age >= 1 && $age <= 100)
            $this->age = $age;
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;



    }


}

$obj1 = new Worker("Саша",30);
$obj2 = new Worker("Юля", 35);

//$obj1->name = 'Иван';
//$obj1->age = '26';
//$obj1->salary = '2000';

//$obj1->setAge(18);
//$obj1->setName('Иван');
$obj1->setSalary(30000);
//
//$obj1->setAge(50);

echo $obj1->getAge() . '<br>';
echo $obj1->getName() . '<br>';
echo $obj1->getSalary();



