<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: student_form.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Successful</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>

<div class="card">
    <h2>🌙 Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> 🌙</h2>
    <p>You’ve logged in successfully.</p>

    <a href="view_users.php">View Registered Students</a>
    <a href="login.html" class="secondary">Back to Login</a>
    <a href="logout.php" class="secondary">Logout</a>
</div>

</body>
</html>