<?php

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function setName($name)
    {
        $this->name = $name;

    }

    public function setAge($age)
    {
        $this->age = $age;

    }


}

class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

<<<<<<< HEAD
=======

>>>>>>> 9a92b7fc2a25767e3767bbdb66fb31bb821aaedb
}

$ivan = new Worker();
$ivan->set_Name('Ivan');
$ivan->set_Age(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->set_Name('Vasya');
$vasya->set_Age(26);
$vasya->setSalary(3000);

echo $vasya->getSalary() + $ivan->getSalary();


class Student extends User
{
    private $stipend;

    public function getStipend()
    {
        return $this->stipend;
    }


    public function setStipend($stipend)
    {
        $this->stipend = $stipend;

    }
}


