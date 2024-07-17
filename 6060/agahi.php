<?php
require("db.php");
date_default_timezone_set("Asia/Tehran");
mysqli_set_charset($db, 'utf8');

$company_name = '';
$work_experience = '';
$reward = '';
$business_travel = '';
$skills = '';
$image_name = '';

if (isset($_POST['company_name']) && isset($_POST['work_experience']) && isset($_POST['reward']) && isset($_POST['business_travel']) && isset($_POST['skills']) && isset($_POST['image_name'])) {
    $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
    $work_experience = mysqli_real_escape_string($db, $_POST['work_experience']);
    $reward = mysqli_real_escape_string($db, $_POST['reward']);
    $business_travel = mysqli_real_escape_string($db, $_POST['business_travel']);
    $skills = mysqli_real_escape_string($db, $_POST['skills']);
    $image_name = mysqli_real_escape_string($db, $_POST['image_name']);

    if (empty($company_name) || empty($work_experience) || empty($reward) || empty($business_travel) || empty($skills) || empty($image_name)) {
        echo "لطفا همه فیلدها را پر کنید.";
    } else {
        $saat = 'دقایقی پیش در تهران';
        $image_path = 'uploads/' . $image_name;

        $sql = "INSERT INTO agahi (company_name, work_experience, reward, business_travel, skills, saat, image) VALUES ('$company_name', '$work_experience', '$reward', '$business_travel', '$skills', '$saat', '$image_path')";


        if (mysqli_query($db, $sql)) {
            header("Location: gallery-thumbnails.php");
            exit();
        } else {
            echo "خطا در ثبت آگهی: " . mysqli_error($db);
        }
    }
}
if (isset($_POST["submit_image"])) {
    $target_dir = "uploads/";
    $image_name = random_int(10000000, 99999999) . '.jpg';
    $target_file = $target_dir . basename($image_name);
    $uploadOk = 1;

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "فایل انتخابی تصویر نیست.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "اندازه فایل بسیار بزرگ است.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "آپلود فایل با خطا مواجه شد.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "آپلود عکس با موفقیت انجام شد.";
        } else {
            echo "آپلود با خطا مواجه شد.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>دیوار تهران: مرجع انواع نیازمندی و آگهی‌های نو و دست دو در شهر تهران</title>
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
        .custom-file-label::after {
            content: "انتخاب فایل";
        }
    </style>
</head>
<body class="main">
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h4>ثبت آگهی جدید</h4>
        </div>
        <div class="card-body">
            <p>اطلاعات زیر را تکمیل کنید:</p>
            <form name="agahiForm" method="post" action="agahi.php" onsubmit="return validateForm()" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileToUpload">بارگذاری تصویر:</label>
                    <?php
                    if (strlen($image_name) > 6) {
                        echo '
                        <div class="img-thumbnail mb-3">
                            <img style="width: auto; max-height: 100px;" src="uploads/' . $image_name . '">
                        </div>
                        ';
                    } else {
                        echo '
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" required>
                            <label class="custom-file-label" for="fileToUpload">انتخاب فایل</label>
                        </div>
                        <button type="submit" class="btn btn-success mt-2" name="submit_image"><i class="fas fa-upload"></i> آپلود تصویر</button>
                        ';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="company_name">نام شرکت:</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $company_name; ?>" placeholder="نام شرکت" maxlength="100" required>
                    <input type="hidden" name="image_name" value="<?php echo $image_name; ?>">
                </div>
                <div class="form-group">
                    <label for="work_experience">سابقه کاری:</label>
                    <input type="text" class="form-control" id="work_experience" name="work_experience" value="<?php echo $work_experience; ?>" placeholder="سابقه کاری" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="reward">پاداش:</label>
                    <input type="text" class="form-control" id="reward" name="reward" value="<?php echo $reward; ?>" placeholder="پاداش" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="business_travel">سفر های کاری:</label>
                    <input type="text" class="form-control" id="business_travel" name="business_travel" value="<?php echo $business_travel; ?>" placeholder="سفر های کاری" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="skills">مهارت:</label>
                    <input type="text" class="form-control" id="skills" name="skills" value="<?php echo $skills; ?>" placeholder="مهارت" maxlength="100" required>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> ثبت آگهی</button>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    function validateForm() {
        var company_name = document.forms["agahiForm"]["company_name"].value;
        var work_experience = document.forms["agahiForm"]["work_experience"].value;
        var reward = document.forms["agahiForm"]["reward"].value;
        var business_travel = document.forms["agahiForm"]["business_travel"].value;
        var skills = document.forms["agahiForm"]["skills"].value;

        if (company_name == "" || work_experience == "" || reward == "" || business_travel == "" || skills == "") {
            alert("لطفا همه فیلدها را پر کنید.");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
