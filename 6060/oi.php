<?php
require("db.php");
date_default_timezone_set("Asia/Tehran");
mysqli_set_charset($db, 'utf8');
?>

<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>دیوار تهران: مرجع انواع نیازمندی و آگهی‌های نو و دست دو در شهر تهران</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="divar.png">
</head>

<body class="main">
    <div class="main_search">
        <div class="search_divar">
            <i class="fa-solid fa-magnifying-glass search1"></i>
            <label class="search_text">جستجو در همهٔ آگهی‌ها</label>
            <label class="search_text2">تهران <i class="fa-regular fa-location-dot"></i></label>
        </div>
    </div>

    <div class="filter1">
        <div class="filter2">
            <button><i class="fa-regular fa-sliders" style="font-size: 12px;"></i> فیلترها</button>
            <button><i class="fa-regular fa-list" style="font-size: 12px;"></i> دسته‌ها</button>
            <button>خودروسازی</button>
            <button>فروش آپارتمان</button>
            <button>اجاره آپارتمان</button>
            <button>موبایل</button>
            <button>صندلی و نیمکت</button>
        </div>
    </div>

    <h1 class="h1">دیوار تهران: انواع آگهی‌ها و خدمات در تهران</h1>

    <?php
    $sql = mysqli_query($db, "SELECT * FROM agahi ORDER BY id DESC");

    while ($row = mysqli_fetch_assoc($sql)) {
        $name = $row['onvan'];
        $karkard = $row['karkard'];
        $price = $row['price'];
        $saat = $row['saat'];
        $image = $row['image'];

        echo '
        <div class="agahi1">
            <div class="agahi2">
                <div class="row">
                    <div class="col-6">
                        <div class="text1">'. $name .'</div>
                        <br>
                        <div class="text2">'. $karkard .'</div>
                        <div class="text2">'. $price .'</div>
                        <div class="text2" style="font-size: 12px; color: rgb(160, 160, 160)">'. $saat .'</div>
                    </div>
                    <div class="col-6">
                        <img src="'. $image .'" alt="">
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    ?>

    <?php include("footer.php") ?>
</body>
</html>
<style>
    /* style.css */

/* برای قسمت جستجو */
.main_search {
    text-align: center;
    margin-top: 20px;
}

.search_divar {
    display: inline-block;
    padding: 10px;
    background-color: #f8f9fa; /* رنگ پس زمینه */
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search_divar input[type="text"] {
    border: none;
    padding: 5px;
    margin-right: 5px;
    width: 200px; /* عرض فیلد جستجو */
    border-radius: 5px;
    font-size: 14px;
}

.search_divar button {
    padding: 5px 15px;
    background-color: #007bff; /* رنگ دکمه */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.search_text2 {
    margin-left: 5px;
    font-size: 14px;
    color: #666;
}

/* برای دکمه‌ها */
.filter2 button {
    margin: 5px;
    padding: 10px 20px;
    background-color: #007bff; /* رنگ دکمه */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

</style>