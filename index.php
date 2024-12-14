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
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">ChatCYH URL Code</h1>
        <form method="GET" action="redirect.php">
            <input type="text" name="code" class="input-box" placeholder="输入代码以重定向" required>
            <input type="password" name="password" class="input-box" placeholder="输入密码（如果需要）">
            <div>
                <button type="submit" class="button">加入</button>
                <button type="button" class="button" onclick="location.href='create.php'">创建</button>
            </div>
        </form>
    </div>
</body>
</html>