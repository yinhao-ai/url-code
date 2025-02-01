<?php
// Get user input code
$code = $_GET['code'] ?? '';
$passwordInput = $_GET['password'] ?? '';

// Locate the corresponding file
$file = "data/$code.json";

if (!file_exists($file)) {
    errorPage("Invalid code! Please check your input.");
}

// Read file content
$data = json_decode(file_get_contents($file), true);

// Check if a password is required
if (!empty($data['password']) && $data['password'] !== $passwordInput) {
    errorPage("Sorry! Your request was not processed! Please check if a password is required or if the code is incorrect.");
}

// Redirect to the target URL
header("Location: " . $data['url']);
exit;

// Function to display an error page
function errorPage($message) {
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Error - URL</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #000;
                color: #fff;
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
            }
            .container {
                background: rgba(255, 255, 255, 0.1);
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
                width: 80%;
                max-width: 500px;
            }
            .title {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 15px;
                color: #007bff;
            }
            .message {
                font-size: 1.2rem;
                color: #ff4d4d;
                margin-bottom: 20px;
            }
            .button {
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                background-color: #007bff;
                color: #fff;
                font-size: 1rem;
                cursor: pointer;
                text-decoration: none;
                transition: background 0.3s;
                display: inline-block;
            }
            .button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='title'>Error - ChatCYH URL</div>
            <div class='message'>$message</div>
            <a href='/urlcode' class='button'>Back to Home</a>
        </div>
    </body>
    </html>";
    exit;
}
?>
