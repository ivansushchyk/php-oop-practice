<?php

class Worker
{
private $name;
private $age;
private $salary;

public function get_Name()
{
return $this->name;
}

public function get_Age()
{
return $this->age;
}

public function get_Salary()
{
return $this->salary;
}

public function set_Name($name)
{
$this->name = $name;

}

public function set_Age($age)
{ if($this->check_Age($age)){
$this->age = $age;
}
else{
    echo 'Age must be bigger than 1 and les than 100';
}
}

public function set_Salary($salary)
{
$this->salary = $salary;
}
private function check_Age($age){
    if ($age > 1 && $age<100){
          return true;
        }
        else {
            return false;
        }
}

}
$ivan = new Worker();
$ivan->set_Age(112);
$ivan->set_Age(35);
echo $ivan->get_Age();