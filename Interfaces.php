
<?php
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    public function startEngine() {
        echo "Car engine started.\n";
        echo "<br>";
    }

    public function stopEngine() {
        echo "Car engine stopped.\n";
        echo "<br>";
    }
}

class Bike implements Vehicle {
    public function startEngine() {
        echo "Bike engine started.\n";
        echo "<br>";
    }

    public function stopEngine() {
        echo "Bike engine stopped.\n";
    }
}

// Usage
$car = new Car();
$car->startEngine();  // Output: Car engine started.
$car->stopEngine();   // Output: Car engine stopped.

$bike = new Bike();
$bike->startEngine();  // Output: Bike engine started.
$bike->stopEngine();   // Output: Bike engine stopped.
?>
