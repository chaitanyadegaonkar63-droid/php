<?php
session_start();
if (!isset($_SESSION['admin'])) {
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<h2>Dashboard</h2>


<a href="students/list.php">Manage Students</a> |
<a href="logout.php">Logout</a>


</body>
</html>
