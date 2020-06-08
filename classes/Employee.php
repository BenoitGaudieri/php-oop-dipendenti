<?php 
class Employee {
    // Props
    public $name;
    public $surname;
    public $dob;
    public $baseWage;

    // Constructor
    public function __construct($_name, $_surname, $_dob, $_baseWage) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dob = $_dob;
        $this->baseWage = $_baseWage;
    }

    public function age() {
        if (!is_int($this->dob)) {
            throw new Exception("Not a number");
        }
        $currYear = date("Y");
        return $currYear - $this->dob;
    }
}