<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'] ?? '';
    $code = substr(md5(uniqid()), 0, 6); // 随机生成6位代码
    $password = $_POST['password'] ?? '';

    // 保存到文件 (简单存储，生产环境应使用数据库)
    $data = [
        'url' => $url,
        'password' => $password
    ];
    file_put_contents("data/$code.json", json_encode($data));

    echo "<script>alert('创建成功！您的代码是：$code'); window.location.href='index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>创建链接 - ChatCYH URL Code</title>
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
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">创建链接</h1>
        <form method="POST">
            <input type="url" name="url" class="input-box" placeholder="输入URL" required>
            <input type="text" name="password" class="input-box" placeholder="设置密码（可选）">
            <button type="submit" class="button">创建</button>
        </form>
    </div>
</body>
</html>