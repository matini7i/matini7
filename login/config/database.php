<?php
$db = mysqli_connect('localhost','root','','matin database');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matin database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

