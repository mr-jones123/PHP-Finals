<?php
require '../vendor/autoload.php';
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->safeLoad();

$API = $_ENV["GEMINI_API"];
$client = new Client($API);
$response = $client->geminiPro()->generateContent(
    new TextPart('Who is Alan Turing?'),
);

print $response->text();
?>