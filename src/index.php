<?php 
session_start();

$request_method = $_SERVER['REQUEST_METHOD'];
$requested_url = $_SERVER['REQUEST_URI'];
$requested_url = strtok($requested_url, '?');

if ($request_method == 'POST') {
    process_post_request($requested_url);
} else {
    if ($requested_url == '/' || $requested_url == '/home') {
        include 'home.php';
        exit();
    }
    if($requested_url == '/about') {
        include 'about.php';
        exit();
    }
    if($requested_url == '/contact') {
        include 'join.php';
        exit();
    }
}

function process_post_request($requested_url) {
    $form_data = $_POST;
    switch ($requested_url) {
        case '/result':
            include 'backend/result.php';
            break;
    }
}
?>
