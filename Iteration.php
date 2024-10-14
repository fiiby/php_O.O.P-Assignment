<?php
class NumberCollection implements Iterator {
    private $numbers = [];
    private $position = 0;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    // Return type 'mixed' as per Iterator interface
    public function current(): mixed {
        return $this->numbers[$this->position];
    }

    // Return type 'mixed' since the key could be int or string
    public function key(): mixed {
        return $this->position;
    }

    // Return type 'void' as per Iterator interface
    public function next(): void {
        $this->position++;
    }

    // Return type 'void'
    public function rewind(): void {
        $this->position = 0;
    }

    // Return type 'bool'
    public function valid(): bool {
        return isset($this->numbers[$this->position]);
    }
}

$numbers = new NumberCollection([1, 2, 3, 4, 5]);

// Using the collection as an iterable
foreach ($numbers as $number) {
    echo $number . "\n";  // Output: 1 2 3 4 5
}
?>
