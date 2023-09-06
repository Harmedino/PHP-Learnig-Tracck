<?php
require_once 'conn.php';
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    if (!$name) {
        $_SESSION['nameError'] = "Please fill in the name field";
        header('Location: index.php'); 
    }

    if (!$email) {
        $_SESSION['emailError'] = "Please fill in the email field";
        header('Location: index.php'); 
    }
    if (!$password) {
        $_SESSION['passwordError'] = "Please fill in the password field";
        header('Location: index.php'); 
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $check = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

        if (mysqli_num_rows($check) >= 1) {
            // echo json_encode(mysqli_fetch_array(#check))
            $_SESSION['existError'] = "Email already in use";
            header('Location: index.php'); 
            die();
        }
        $query = mysqli_query($conn, "INSERT INTO users (name, email, password) Values('$name', '$email', '$password')");
        header('Location: login.php'); 
    }
} else {
    echo 'Error';
}
?>
