<?php
class Vehicle {

    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

$vehicle = new Vehicle("Toyota", "Corolla", 2022);
$vehicle->displayDetails();

echo '<br>';
$vehicle = new Vehicle("Toyota", "camry", 2032);
$vehicle->displayDetails();




?>
