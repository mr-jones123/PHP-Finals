<?php
require '../vendor/autoload.php';
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable('../src');
$dotEnv->load();

$DB_SERVER = $_ENV["SERVER"];
$DB_USER = $_ENV["USER"];
$DB = $_ENV["DATABASE"];
$DB_PASS = $_ENV["PASS"];
$DB_PORT = 3308;

try {
    $connect = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB, $DB_PORT);
    if (!$connect) {
        throw new Exception("Connection to the database failed: " . mysqli_connect_error());
    }
    echo "You are connected";
} catch (Exception $e) {
    // Handle the error gracefully
    echo "Error: " . $e->getMessage();
}
?>