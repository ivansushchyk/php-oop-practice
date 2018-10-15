<?php

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$ivan = new Worker();
$ivan->name = 'Ivan';
$ivan->age = 25;
$ivan->salary = 1000;

$vasya = new Worker();
$vasya->name = 'Vasya';
$vasya->age = 26;
$vasya->salary = 2000;

echo $vasya->salary + $ivan->salary;