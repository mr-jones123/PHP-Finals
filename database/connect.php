<?php
 require '../vendor/autoload.php';
 use Dotenv\Dotenv;
 $dotEnv = Dotenv::createImmutable('../src');
 $dotEnv->load();

function getDatabaseConnection() {

    $DB_SERVER = $_ENV["SERVER"];
    $DB_USER = $_ENV["USER"];
    $DB = $_ENV["DATABASE"];
    $DB_PASS = $_ENV["PASS"];
    $DB_PORT = 3308;

    try {
        $connect = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB, $DB_PORT);
        echo "You are connected";
        return $connect;
    } catch (Exception $e) {
        // Handle the error gracefully
        echo "Error: " . $e->getMessage();
        return null;
    }
}
?>