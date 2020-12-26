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
            font-size: 1em;
            padding: 24px;
            font-family: "Arial", monospace;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
            font-weight: bold;
        }

        .header {
            color: darkslateblue;
        }
        .content {
            color: #047717;
        }
    </style>
</head>
<body>
<?php

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method !== 'POST') {
        die("Phương thức $method không được hỗ trợ. Server chỉ tiếp nhận dữ liệu từ phương thức POST.");
    }
    if (!isset($_POST['name'])) {
        die("Thiếu tham số 'name'");
    }
    if (!isset($_POST['email'])) {
        die("Thiếu tham số 'email'");
    }
    if (!isset($_POST['birthday'])) {
        die("Thiếu tham số 'birthday'");
    }
    if (!isset($_POST['birthtime'])) {
        die("Thiếu tham số 'birthtime'");
    }
    if (!isset($_POST['country'])) {
        die("Thiếu tham số 'country'");
    }
    if (!isset($_POST['toeic'])) {
        die("Thiếu tham số 'toeic'");
    }
    if (!isset($_POST['message'])) {
        die("Thiếu tham số 'message'");
    }


    $email = $_POST['email'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $birthtime = $_POST['birthtime'];
    $country = $_POST['country'];
    $toeic = $_POST['toeic'];
    $message = $_POST['message'];


    if (empty($name)) {
        die("Tên người dùng không được để trống");
    }
    if (empty($email)) {
        die("Email không được để trống");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Định dạng của email không hợp lệ");
    }
    if (empty($birthday)) {
        die("Ngày sinh không được để trống");
    }
    if (empty($birthtime)) {
        die("Thời gian sinh không được để trống");
    }
    if (!isset($_POST['gender'])) {
        die("Vui lòng chọn giới tính");
    }
    if (strtolower($_POST['gender']) !== 'male' && strtolower($_POST['gender']) !== 'female') {
        die("Giới tính phải mang một trong hai giá trị 'male' hoặc 'female'");
    }
    if (empty($country)) {
        die("Vui lòng chọn quốc gia của bạn");
    }
    if (strpos($country, 'country')) {
        die("Vui lòng chọn quốc gia của bạn");
    }
    if (strlen($country) === 0) {
        die("Giá trị quốc gia không thể bỏ trống");
    }
    if (!isset($_POST['favorite_ide'])) {
        die("Vui lòng chọn các IDE yêu thích của bạn");
    }
    if (empty($message)) {
        die("Vui lòng nhập giới thiệu về bản thân bạn");
    }

    $gender = $_POST['gender'];
    $ide = $_POST['favorite_ide'];



    ?>

    <div class="container">
        <table>
            <tr>
                <td class="header">Họ tên</td>
                <td class="content"><?= $name ?></td>
            </tr>
            <tr>
                <td class="header">Email</td>
                <td class="content"><?= $email ?></td>
            </tr>
            <tr>
                <td class="header">Ngày sinh</td>
                <td class="content"><?= $birthday ?></td>
            </tr>
            <tr>
                <td class="header">Giờ sinh</td>
                <td class="content"><?= $birthtime ?></td>
            </tr>
            <tr>
                <td class="header">Giới tính</td>
                <td class="content"><?= $gender ?></td>
            </tr>
            <tr>
            <td class="header">Quốc gia</td>
                <td class="content"><?= $country ?></td>
            </tr>
            <tr>
                <td class="header">
                    <div>IDE Yêu thích</div>
                    <div style="color: #dd2e2a; font-size: 0.9rem; margin-top: 4px">Hãy đảm bảo rằng các IDE bạn chọn đã hiển thị đủ</div>
                </td>
                <td class="content">
                    <?php
                        foreach ($ide as $i) {
                            echo "<p>$i</p>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="header">Điểm TOEIC</td>
                <td class="content"><?= $toeic ?></td>
            </tr>
            <tr>
                <td class="header">Giới thiệu bản thân</td>
                <td class="content"><?= $message ?></td>
            </tr>
        </table>
    </div>
</body>
</html>