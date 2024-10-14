<?php
class MathOperations {
    // Static property
    public static $pi = 3.14159;

    // Static method
    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Accessing static property and method without instantiation
echo MathOperations::$pi;  // Output: 3.14159
echo MathOperations::circleArea(5);  // Output: 78.53975
?>
