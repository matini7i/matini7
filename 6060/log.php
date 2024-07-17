<?php
session_start();

// اتصال به دیتابیس
$db = mysqli_connect('localhost', 'root', '', 'matin database');

// بررسی ارسال فرم و ذخیره اطلاعات در دیتابیس
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت اطلاعات ارسال شده از فرم
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // تولید یک کوئری برای درج اطلاعات در دیتابیس
    $query = "INSERT INTO users (username, email, mobile, password) VALUES ('$username', '$email', '$mobile', '$password')";

    // اجرای کوئری و بررسی موفقیت
    if (mysqli_query($db, $query)) {
        // ثبت نام با موفقیت انجام شد، اطلاعات کاربر را در session ذخیره کنید
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;

        // هدایت کاربر به index.php
        header("Location: index.php");
        exit();
    } else {
        echo "خطا در ثبت نام: " . mysqli_error($db);
    }

    // بستن اتصال به دیتابیس
    mysqli_close($db);
}
?>




/*
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود/ثبت نام</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url(https://dl.psd-eps.com/uploads/2020/03/14-32.jpg);

            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            

        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            transform-style: preserve-3d;
            transition: all 1s ease;
        }

        .form .form_front, .form .form_back {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            position: absolute;
            backface-visibility: hidden;
            padding: 65px 45px;
            border-radius: 15px;
            box-shadow: inset 2px 2px 10px rgb(62, 204, 219), inset -1px -1px 5px rgba(0, 0, 0, 0.6);
            background-color: #444;
        }

        .form .form_back {
            transform: rotateY(-180deg);
        }

        .form_details {
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            color: white;
        }

        .input {
            width: 245px;
            min-height: 45px;
            color: #fff;
            outline: none;
            transition: 0.35s;
            padding: 0px 7px;
            background-color: #212121;
            border-radius: 6px;
            border: 2px solid #212121;
            box-shadow: 6px 6px 10px rgba(0,0,0,1), 1px 1px 10px rgba(255, 255, 255, 0.6);
        }

        .input::placeholder {
            color: #999;
        }

        .input:focus.input::placeholder {
            transition: 0.3s;
            opacity: 0;
        }

        .input:focus {
            transform: scale(1.05);
            box-shadow: 6px 6px 10px rgba(0,0,0,1), 1px 1px 10px rgba(255, 255, 255, 0.6), inset 2px 2px 10px rgba(0,0,0,1), inset -1px -1px 5px rgba(255, 255, 255, 0.6);
        }

        .btn {
            padding: 10px 35px;
            cursor: pointer;
            background-color: #212121;
            border-radius: 6px;
            border: 2px solid #212121;
            box-shadow: 6px 6px 10px rgba(0,0,0,1), 1px 1px 10px rgba(255, 255, 255, 0.6);
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            transition: 0.35s;
        }

        .btn:hover, .btn:focus {
            transform: scale(1.05);
            box-shadow: 6px 6px 10px rgba(0,0,0,1), 1px 1px 10px rgba(255, 255, 255, 0.6), inset 2px 2px 10px rgba(0,0,0,1), inset -1px -1px 5px rgba(255, 255, 255, 0.6);
        }

        .form .switch {
            font-size: 13px;
            color: white;
        }

        .form .switch .signup_tog {
            font-weight: 700;
            cursor: pointer;
            text-decoration: underline;
        }

        .container #signup_toggle {
            display: none;
        }

        .container #signup_toggle:checked + .form {
            transform: rotateY(-180deg);
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form');
            const usernameInputs = form.querySelectorAll('input[name="username"]');
            const emailInput = form.querySelector('input[name="email"]');
            const mobileInput = form.querySelector('input[name="mobile"]');
            const passwordInputs = form.querySelectorAll('input[name="password"]');
            
            const createErrorElement = (message) => {
                const errorElement = document.createElement('div');
                errorElement.className = 'error';
                errorElement.textContent = message;
                return errorElement;
            }

            const validateForm = (event) => {
                let isValid = true;
                
                // Remove previous error messages
                form.querySelectorAll('.error').forEach(el => el.remove());

                // Validate username
                usernameInputs.forEach(usernameInput => {
                    if (usernameInput && usernameInput.value.length < 3) {
                        isValid = false;
                        usernameInput.insertAdjacentElement('afterend', createErrorElement('نام کاربری باید حداقل ۳ کاراکتر باشد.'));
                    }
                });

                // Validate email
                if (emailInput && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                    isValid = false;
                    emailInput.insertAdjacentElement('afterend', createErrorElement('ایمیل نامعتبر است.'));
                }

                // Validate mobile
                if (mobileInput && !/^09\d{9}$/.test(mobileInput.value)) {
                    isValid = false;
                    mobileInput.insertAdjacentElement('afterend', createErrorElement('شماره موبایل باید با ۰۹ شروع شده و ۱۱ رقم باشد.'));
                }

                // Validate password
                passwordInputs.forEach(passwordInput => {
                    if (passwordInput && passwordInput.value.length < 5) {
                        isValid = false;
                        passwordInput.insertAdjacentElement('afterend', createErrorElement('رمز عبور باید حداقل ۵ کاراکتر باشد.'));
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                }
            }

            form.addEventListener('submit', validateForm);
        });
    </script>
</head>
<body>
    <div class="container">
        <input id="signup_toggle" type="checkbox">
        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form_front">
                <div class="form_details">ورود</div>
                <input type="text" class="input" name="username" placeholder="نام کاربری">
                <input type="password" class="input" name="password" placeholder="رمز عبور">
                <button type="submit"

                class="btn">ورود</button>
<span class="switch">قبلاً ساخت اکانت داشتم؟
<label for="signup_toggle" class="signup_tog">ثبت نام</label>
</span>
</div>
<div class="form_back">
<div class="form_details">ثبت نام</div>
<input type="text" class="input" name="username" placeholder="نام کاربری">
<input type="email" class="input" name="email" placeholder="ایمیل">
<input type="text" class="input" name="mobile" placeholder="شماره موبایل">
<input type="password" class="input" name="password" placeholder="رمز عبور">
<button type="submit" class="btn">ثبت نام</button>
<span class="switch">آیا حساب کاربری دارید؟
<label for="signup_toggle" class="signup_tog">ورود</label>
</span>
</div>
</form>
</div>

</body>
</html>