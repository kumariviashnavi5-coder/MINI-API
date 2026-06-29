<?php

header("Content-Type: application/json");

$tips = [
    "Practice every day",
    "Read documentation",
    "Build projects",
    "Debug patiently",
    "Never stop learning"
];

echo json_encode($tips);