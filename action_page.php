<?php
echo "Hello from action_page.php!";
// action_page.php

// Include any necessary files or connect to your database here

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Perform authentication (e.g., check against a database)
    // Replace this with your actual authentication logic
    if ($username === 'TRS' && $password === 'SRT') {
        // Successful login
        // Redirect to a protected page or perform other actions
        header('Location: welcome.php'); // Example: redirect to welcome.php
        exit;
    } else {
        // Invalid credentials
        // Redirect back to the login page with an error message
        header('Location: login.php?error=1'); // Example: redirect with error code
        exit;
    }
}
?>
