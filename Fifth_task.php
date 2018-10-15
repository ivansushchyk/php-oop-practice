<?php

class User
{
    private $name;
    private $age;

    public function get_Name()
    {
        return $this->name;
    }

    public function get_Age()
    {
        return $this->age;
    }


    public function set_Name($name)
    {
        $this->name = $name;

    }

    public function set_Age($age)
    {
        $this->age = $age;

    }


}

class Worker extends User
{
    private $salary;

    public function get_Salary()
    {
        return $this->salary;
    }

    public function set_Salary($salary)
    {
        $this->salary = $salary;
    }


}

$ivan = new Worker();
$ivan->set_Name('Ivan');
$ivan->set_Age(25);
$ivan->set_Salary(1000);

$vasya = new Worker();
$vasya->set_Name('Vasya');
$vasya->set_Age(26);
$vasya->set_Salary(3000);

echo $vasya->get_Salary() + $ivan->get_Salary();


class Student extends User
{
    private $stipend;

    public function get_Stipend()
    {
        return $this->stipend;
    }


    public function set_Stipend($stipend)
    {
        $this->stipend = $stipend;

    }
}


