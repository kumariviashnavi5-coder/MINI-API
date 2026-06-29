<?php

header("Content-Type: application/json");

$name = $_GET['name'] ?? "Guest";

$response = [
    "message" => "Hello, " . htmlspecialchars($name) . "!"
];

echo json_encode($response);