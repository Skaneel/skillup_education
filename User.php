<?php


class User
{
    protected $name;

    protected $age;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    function setAge($age)
    {
        $this->age = $age;

    }


}