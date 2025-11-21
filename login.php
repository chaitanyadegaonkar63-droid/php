<?php
session_start();
include 'config/db.php';


if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = md5($_POST['password']);


$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) == 1) {
$_SESSION['admin'] = $username;
header("Location: dashboard.php");
} else {
$error = "Invalid Login Credentials";
}
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<h2>Admin Login</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit" name="login">Login</button>
</form>
<p style="color:red;"> <?php echo isset($error) ? $error : ''; ?> </p>
</body>
</html>
