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
        if ($this->checkAge($age)) {
            $this->age = $age;
        } else {
            echo 'Age must be bigger than 1 and les than 100';
        }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function check_Age($age)
    {
        if ($age > 1 && $age < 100) {
            return true;
        } else {
            return false;
        }
    }

}

$ivan = new Worker();
$ivan->setAge(112);
$ivan->setAge(35);
echo $ivan->getAge();