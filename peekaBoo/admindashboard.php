<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    header('Location: admin_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['admin_username']; ?>!</h2>
    <p>This is the admin dashboard.</p>
    <a href="manage_users.php">Manage Users</a><br>
    <a href="manage_profiles.php">Manage Profiles</a><br>
    <a href="adminlogout.php">Logout</a>
</body>
</html>
