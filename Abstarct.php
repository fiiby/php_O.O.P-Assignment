
 
<?php
abstract class Animal {
    // Abstract method that must be implemented in subclasses
    abstract public function makeSound();

    // Concrete method
    public function sleep() {
        echo "Sleeping...\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!\n";
    }
}

// Usage
$dog = new Dog();
$dog->makeSound();  // Output: Bark!
$dog->sleep();      // Output: Sleeping...

$cat = new Cat();
$cat->makeSound();  // Output: Meow!
$cat->sleep();      // Output: Sleeping...
?>
