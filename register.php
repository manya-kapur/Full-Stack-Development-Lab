<?php
include "db.php";

if (
    !isset($_POST['username']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['password'])
) {
    die("Form data missing");
}

$username = $_POST['username'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO students (Username, Email, Phone, Password)
        VALUES ('$username', '$email', '$phone', '$hashedPassword')";

if (mysqli_query($conn, $sql)) {
    header("Location: register_success.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>