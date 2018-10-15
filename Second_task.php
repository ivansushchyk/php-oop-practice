<?php

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function setAge($age)
    {
        $this->age = $age;

    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}

$ivan = new Worker();
$ivan->set_Name('Ivan');
$ivan->set_Age(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->set_Name('Vasya');
$vasya->set_Age(26);
$vasya->setSalary(2000);

echo $vasya->get_Salary() + $ivan->get_Salary();
echo "\n";
echo $vasya->get_Age() + $ivan->get_Age();

