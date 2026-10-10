<?php
$host = "127.0.0.1";
$dbname = "webtech_db";
$dbuser = getenv("WEBTECH_DB_USER");
$dbpass = getenv("WEBTECH_DB_PASSWORD");

if (!$dbuser || !$dbpass) {
    http_response_code(500);
    exit("Database configuration is missing.");
}

$pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $dbuser,
    $dbpass,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
);
