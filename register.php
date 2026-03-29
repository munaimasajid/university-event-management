<?php
$con = mysqli_connect('localhost', 'root', '1234', 'users');
if (isset($_POST['sb'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $event = $_POST['event']; // Get selected event

  $query = "INSERT INTO mydata(name, email, event) VALUES ('$name', '$email', '$event')";
  $execute = mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register for Event</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Register Now</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="events.php">Events</a>
      <a href="register.php">Register</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="content">
    <h2>Event Registration Form</h2>
    <form method="POST" action="">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <select name="event" required>
        <option value="" disabled selected>Select Event</option>
        <option value="TechFest">TechFest</option>
        <option value="Cultural Night">Cultural Night</option>
        <option value="Career Fair">Career Fair</option>
      </select>
      <input type="submit" name="sb" value="Register">
    </form>
  </section>
 <div class="wrapper">
    <main class="content"></main>
  <footer>
    <p>&copy; 2025 University Events. All rights reserved.</p>
  </footer>
 </div>
</body>
</html>
