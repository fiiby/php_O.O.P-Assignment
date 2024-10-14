<?php
// Declaring a namespace
namespace App\Utilities;

class Logger {
    public function log($message) {
        echo "App Logger: $message\n";
    }
}

// Using the namespace
$logger = new \App\Utilities\Logger();
$logger->log("Hello, world!");  // Output: App Logger: Hello, world!
?>
