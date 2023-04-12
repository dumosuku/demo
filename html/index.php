<?php

// Get the requested page from the URL
$page = $_GET['page'];

// If no page is requested, default to the home page
if (!$page) {
    $page = 'home';
}

// Construct the path to the PHP file
$file = __DIR__ . '/templates/' . $page;

// If the file exists, include it
if (file_exists($file)) {
    include $file;
} else {
    // If the file doesn't exist, return a 404 error
    http_response_code(404);
    echo "404 Not Found";
}


?>
