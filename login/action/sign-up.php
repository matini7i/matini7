<?php
require_once('../config/loader.php');

if(isset($_POST['signup'])){
    try{
        // parameters
        $fullname = $_POST['mobile'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // sql
        $query = "INSERT INTO users (mobile, username, email, password) VALUES (?, ?, ?, ?)";
        
        // prepare statement
        $stmt = $conn->prepare($query);

        // bind parameters
        $stmt->bind_param("ssss", $fullname, $username, $email, $password);

        // execute statement
        $stmt->execute();

        echo "حساب کاربری ایجاد شد";
        header('Location: mc2.html');
        exit(); // Make sure no code is executed after redirection
    } catch(PDOException $e){
        echo "Your error message is : " . $e->getMessage();
    }
}
?>






