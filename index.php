<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatCYH URL Code</title>
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
        }
        .container {
            text-align: center;
            width: 80%;
            max-width: 600px;
        }
        .title {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .input-box {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #555;
            border-radius: 5px;
            background-color: transparent;
            color: #fff;
            font-size: 1rem;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            margin: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #ccc;
        }
        .github-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .github-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">ChatCYH URL Code</h1>
        <form method="GET" action="redirect.php">
            <input type="text" name="code" class="input-box" placeholder="Enter code to redirect" required>
            <input type="password" name="password" class="input-box" placeholder="Enter password (if required)">
            <div>
                <button type="submit" class="button">Join</button>
                <button type="button" class="button" onclick="location.href='create.php'">Create</button>
            </div>
        </form>
    </div>
    
    <div class="footer">
        <p>The security of redirected links cannot be guaranteed. Please check the URL carefully. We do not take any responsibility!</p>
        <p>This service is open-source on  
            <a href="https://github.com/yinhao-ai/url-code" class="github-link" target="_blank">GitHub</a>.
        </p>
    </div>
</body>
</html>
