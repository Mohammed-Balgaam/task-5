<?php
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

$sum = Math::add(10, 5);
$result = Math::subtract(10, 5);
$Multi = Math::multiply(10, 5);

echo "Sum: " . $sum . "<br>";          
echo "Result: " . $result . "<br>";  
echo "Multi: " . $Multi . "<br>";      
?>
