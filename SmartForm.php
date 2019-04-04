<?php
include_once 'Form.php';

class SmartForm extends Form
{

    public function myecho()
    {
        var_dump($this->arr);
    }

}

$obj2 = new SmartForm;
$obj2->myecho();