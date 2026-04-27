<?php
include 'konfigurasi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $checkEmail = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email sudah digunakan!'); window.location='index.html';</script>";
    } else {
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Pendaftaran Berhasil!'); window.location='login.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>