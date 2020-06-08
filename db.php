<?php 
include_once __DIR__ . "/classes/Executive.php";
include_once __DIR__ . "/classes/Nonexec.php";

$executives = [
    new Executive ("Randall", "Boole", 1964, 3500, 150),
    new Executive ("George", "Micheal", 1977, "thousands", 280),
    new Executive ("Joseph", "Stain", 1954, 3500, 350),
];

$nonexecs = [
    new Nonexec ("George", "Smith", 1978, 1500, 50),
    new Nonexec ("Roderick", "Mill", 1982, 1500, 50),
    new Nonexec ("Frederick", "Brockovich", "11/04/1978", 1500, 50),
];
