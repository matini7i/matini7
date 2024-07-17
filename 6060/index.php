<!DOCTYPE HTML>
<html lang="fa" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>گالری آگهی‌ها</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="fonts/css/all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<style>
.InputContainer {
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgb(255, 255, 255);
  border-radius: 10px;
  overflow: hidden;
  cursor: pointer;
  padding-left: 15px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.075);
  margin-top: 17%;
}

.input {
  width: 170px;
  height: 100%;
  border: none;
  outline: none;
  font-size: 0.9em;
  caret-color: rgb(255, 81, 0);
  background:white;
}

.labelforsearch {
  cursor: text;
  padding: 0px 12px;
}

.searchIcon {
  width: 13px;
}

.border {
  height: 40%;
  width: 1.3px;
  background-color: rgb(223, 223, 223);
}

.micIcon {
  width: 12px;
}

.micButton {
  padding: 0px 15px 0px 12px;
  border: none;
  background-color: transparent;
  height: 40px;
  cursor: pointer;
  transition-duration: .3s;
}

.searchIcon path {
  fill: rgb(114, 114, 114);
}

.micIcon path {
  fill: rgb(255, 81, 0);
}

.micButton:hover {
  background-color: rgb(255, 230, 230);
  transition-duration: .3s;
}





.row{

margin-top: 4%;

}




.btn, input, select {




}


</style>
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center">
        <a href="" class="header-title">صفحه اصلی</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fa fa-chevron-right"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href=""><i class="fa fa-layer-group"></i><span></span>درباره ما</a>
        <a href="#"><i class="fa fa-file"></i><span>باکس کارفرما</span></a>
        <a href="agahi.php" class="circle-nav"><i class="fad fa-home"></i><span>ثبت آگهی</span></a>
        <a href="" class="active-nav"><i class="fa fa-camera"></i><span>حساب کاربری</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>منو</span></a>
    </div>
    


    <div class="container mt-5">
        <div class="InputContainer">
            <input type="text" name="text" class="input" id="input" placeholder="Search">
            <label for="input" class="labelforsearch">
                <svg viewBox="0 0 512 512" class="searchIcon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
            </label>
            <div class="border"></div>
            <button class="micButton">
                <svg viewBox="0 0 384 512" class="micIcon"><path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"></path></svg>
            </button>
        </div>
        <div class="row">
            <?php
            require("db.php");
            date_default_timezone_set("Asia/Tehran");
            mysqli_set_charset($db, 'utf8');

            $sql = mysqli_query($db, "SELECT * FROM agahi ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($sql)) {
                $company_name = $row['company_name'];
                $work_experience = $row['work_experience'];
                $reward = $row['reward'];
                $business_travel = $row['business_travel'];
                $skills = $row['skills'];
                $image = $row['image'];

                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="'. $image .'" class="card-img-top" alt="تصویر آگهی">
                        <div class="card-body">
                            <h5 class="card-title">'. $company_name .'</h5>
                            <p class="card-text"><strong>سابقه کاری:</strong> '. $work_experience .'</p>
                            <p class="card-text"><strong>پاداش:</strong> '. $reward .'</p>
                            <p class="card-text"><strong>سفر های کاری:</strong> '. $business_travel .'</p>
                            <p class="card-text"><strong>مهارت‌ها:</strong> '. $skills .'</p>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>
