<?php

if ($_SERVER['REQUEST_URI'] === '/foo') {
    http_response_code(200);
    echo "Welcome to the new world.";
    die();
}

http_response_code(404);
