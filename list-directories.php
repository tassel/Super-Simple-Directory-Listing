<?php
header('Content-Type: application/json');

$directory = __DIR__; // Set to the current directory
$folders = array_filter(scandir($directory), function($item) {
    return is_dir($item) && $item !== "." && $item !== "..";
});

echo json_encode(array_values($folders));
?>
