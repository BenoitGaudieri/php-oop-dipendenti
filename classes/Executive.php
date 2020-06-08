<?php 
include_once __DIR__ . "/Employee.php";

class Executive extends Employee {
    // props
    public $wageExt;

    // Constructor
    public function __construct($_name, $_surname, $_dob, $_baseWage, $_wageExt){
        parent::__construct($_name, $_surname, $_dob, $_baseWage);
        $this->wageExt = $_wageExt;
    }

    // Methods
    public function wageCalc() {
        if (!is_int($this->baseWage)) {
            throw new Exception("Not a number");
        }
        $toAdd = $this->baseWage * $this->wageExt / 100;
        $finalWage = $this->baseWage + $toAdd;
        return number_format($finalWage, 2);
    }
}