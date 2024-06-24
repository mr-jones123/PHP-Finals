<?php
require '../vendor/autoload.php';
use GeminiAPI\Client;
use GeminiAPI\Enums\MimeType;
use GeminiAPI\Resources\Parts\TextPart;
use GeminiAPI\Resources\Parts\ImagePart;
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->safeLoad();

$API = $_ENV["GEMINI_API"];
$client = new Client($API);
$response = $client->geminiProVision()->generateContent(
    new TextPart('Explain what is in the image'),
    new ImagePart(
        MimeType::IMAGE_JPEG,
        base64_encode(file_get_contents('../img/actually.jpg')),
    ),
);

print $response->text();
?>

cccccccc