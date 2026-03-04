<?php
include "db.php";
$sql = "SELECT ID, Username, Email, Phone FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
    <link rel="stylesheet" href="view_users.css">
</head>
<body>

<div class="container">
    <h2>✨ Registered Students ✨</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Username']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['Phone']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        ?>
    </table>

    <div class="actions">
        <a href="login_success.php">Back</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>