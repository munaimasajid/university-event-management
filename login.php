<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "student" && $password === "1234") {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    echo "<script>alert('Invalid username or password');</script>";
  }
}
?>