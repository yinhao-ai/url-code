<?php
// 获取用户输入的代码
$code = $_GET['code'] ?? '';
$passwordInput = $_GET['password'] ?? '';

// 查找对应的文件
$file = "data/$code.json";

if (!file_exists($file)) {
    die("<h1 style='color: red; text-align: center;'>无效的代码！</h1>");
}

// 读取文件内容
$data = json_decode(file_get_contents($file), true);

// 检查是否需要密码
if (!empty($data['password']) && $data['password'] !== $passwordInput) {
    die("<h1 style='color: red; text-align: center;'>对不起！您的请求并没有被处理！原因是您并没有输入正确的密码！</h1>");
}

// 如果验证通过，重定向到目标URL
header("Location: " . $data['url']);
exit;
?>