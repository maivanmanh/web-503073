<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 1.5em;
            padding: 24px;
        }
        .success {
            color: green;
            background-color: #4abe4a;
            border-radius: 8px;
            text-align: center;
            width: 50%;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<?php

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method !== 'POST') {
        die("Phương thức $method không được hỗ trợ. Server chỉ tiếp nhận dữ liệu từ phương thức POST.");
    }
    if (!isset($_POST['email'])) {
        die("Thiếu tham số 'email'");
    }
    if (!isset($_POST['password'])) {
        die("Thiếu tham số 'password'");
    }

    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (empty($email)) {
        die("Email không được để trống");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Định dạng của email không hợp lệ");
    }
    if (empty($pass)) {
        die("Mật khẩu không được để trống");
    }
    if (strlen($pass) < 6) {
        die("Mật khẩu phải có tối thiểu 6 ký tự");
    }

    if ($email === 'admin@gmail.com' && $pass === '123456') {
        die('<div class="success">Xin chúc mừng! Bạn đã hoàn thành bài tập</div>');
    }else {
        die('Email hoặc mật khẩu không chính xác');
    }


?>
</body>
</html>