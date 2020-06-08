<?php 
include_once __DIR__ . "/Employee.php";

class Nonexec extends Employee {
    // props
    public $overtime;

    // Constructor
    public function __construct($_name, $_surname, $_dob, $_baseWage, $_overtime){
        parent::__construct($_name, $_surname, $_dob, $_baseWage);
        $this->overtime = $_overtime;
    }
}