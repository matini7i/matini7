<?php
require("db.php");
date_default_timezone_set("Asia/Tehran");
mysqli_set_charset($db, 'utf8');
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>ثبت موفقیت‌آمیز آگهی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="divar.png">
    <style>
        .main {
            direction: rtl;
            font-family: 'IRANSans', Tahoma, Arial, sans-serif;
        }
        .success-message {
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            border: 2px solid #4caf50;
            border-radius: 5px;
            background-color: #dff0d8;
            color: #3c763d;
        }
        .success-message a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body class="main">
    <div class="container">
        <div class="success-message">
            <h1>آگهی با موفقیت ثبت شد</h1>
            <p>آگهی شما با موفقیت ثبت شد. برای مشاهده آگهی‌های ثبت شده، به صفحه اصلی بروید.</p>
            <a href="display_ads.php"><i class="fas fa-home"></i> بازگشت به صفحه اصلی</a>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>
