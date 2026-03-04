<?php
include "db.php";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    die("Username or password not received");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE Username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    // IMPORTANT: Password with capital P
    if (password_verify($password, $row['Password'])) {
    session_start();
    $_SESSION['username'] = $row['Username'];

    header("Location: login_success.php");
    exit();
    }
    else {
        echo "Invalid password";
    }

} else {
    echo "User not found";
}
?>