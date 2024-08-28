<?php
class Student {
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayInfo() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

$student = new Student("Naser", 20, "1");
$student->displayInfo();

echo '<br>';
$student = new Student("ali", 23, "2");
$student->displayInfo();








?>
