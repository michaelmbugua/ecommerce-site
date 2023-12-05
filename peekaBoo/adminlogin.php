<?php
session_start();
require_once 'datingdb.sql';
$connection = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
     $sql = "SELECT * FROM admin_users WHERE username = '$username' AND password = '$password'";
    $result = query($sql, $connection);
if ($result->rowCount() == 1) {
        $_SESSION['admin_username'] = $username;
        header('Location: admindashboard.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="post" action="admin_login.php">
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
