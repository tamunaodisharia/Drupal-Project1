<?php


// REQUEST PROCESSING.

// Most request information.
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// Request method.
echo $_SERVER['REQUEST_METHOD'];

// Request URI.
echo $_SERVER['REQUEST_URI'];

// Query string.
echo $_SERVER['QUERY_STRING'];
// Get a specific query parameter.
echo $_GET['name'];
echo " ";
echo $_GET['lastname'];
// Or on the same line.
echo $_GET['name'] . " " . $_GET['lastname'];

// User agent.
echo $_SERVER['HTTP_USER_AGENT'];
