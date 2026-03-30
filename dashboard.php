<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: portal.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <h1>Dashboard</h1>
</header>

<h2>Welcome <?php echo $_SESSION['username']; ?> 🎉</h2>

<a href="logout.php">Logout</a>

</body>
</html>