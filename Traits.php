<?php
trait Logger {
    public function log($message) {
        echo "Logging message: $message\n";
    }
}

class Application {
    use Logger;  // Using the Logger trait

    public function run() {
        $this->log("Application started.");
        echo "<br>";
    }
}

class Database {
    use Logger;  // Using the Logger trait

    public function connect() {
        $this->log("Database connected.");
        echo "<br>";
    }
    }


// Usage
$app = new Application();
$app->run();  // Output: Logging message: Application started.

$db = new Database();
$db->connect();  // Output: Logging message: Database connected.
?>
