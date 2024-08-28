<?php
class Logger {
    public static $logCount = 0;

    public static function log($message) {
        self::$logCount++;

        // Display the log message
        echo "Log #" . self::$logCount . ": " . $message . "<br>";
    }
}

Logger::log("This is the first log message.");
Logger::log("This is the second log message.");
Logger::log("This is the third log message.");

echo "Total log messages: " . Logger::$logCount . "<br>";
?>
