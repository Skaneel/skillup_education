<?php
include_once 'User.php';

class Student extends User
{
    private $grant;

    private $course;

    function setGrant($grant)
    {
        $this->grant = $grant;
    }

    function getGrant()
    {
        return  $this->grant;
    }

    function getCourse()
    {
        return $this->course;
    }

    function setCourse($course)
    {
        $this->course = $course;

    }

}

$student1 = new Student();

$student1->setGrant(100);
echo $student1->getGrant();