<?php

class Worker
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function get_Name()
    {
        return $this->name;
    }

    public function get_Salary()
    {
        return $this->salary;
    }
}

$dima = new Worker('Dmitrii', 14200);
echo $dima->get_Salary();
