<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Area = π * r^2
    }

    public function calculateCircumference() {
        return 2 * pi() * $this->radius; // Circumference = 2 * π * r
    }

    public function displayDetails() {
        echo "Radius: " . $this->radius . "<br>";
        echo "Area: " . $this->calculateArea() . "<br>";
        echo "Circumference: " . $this->calculateCircumference() . "<br>";
    }
}

$circle = new Circle(5);
$circle->displayDetails();
?>
