<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // For demo: static credentials
  if ($username === "student" && $password === "1234") {
    echo "<script>alert('Login successful!'); window.location.href='dashboard.php';</script>";
  } else {
    echo "<script>alert('Invalid username or password'); window.location.href='portal.php';</script>";
  }
}
?>
