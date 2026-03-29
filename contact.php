<?php
$con = mysqli_connect('localhost', 'root', '1234', 'users');
$success = false;

if (isset($_POST['sb'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = "INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
  $execute = mysqli_query($con, $query);

  if ($execute) {
    $success = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* ... [Your existing CSS remains unchanged] ... */
  </style>
</head>
<body>
  <header>
    <h1>University Event Management</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="events.php">Events</a>
      <a href="register.php">Register</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <div class="contact-container">
    <h1 class="contact-title">Contact Us</h1>

    <?php if ($success): ?>
      <p style="color: green; text-align: center; font-weight: bold;">Message sent successfully!</p>
    <?php endif; ?>

    <form id="contactForm" method="POST" action="">
      <label for="name">Name *</label>
      <input type="text" id="name" name="name" required placeholder="Your full name" />

      <label for="email">Email *</label>
      <input type="email" id="email" name="email" required placeholder="you@example.com" />

      <label for="subject">Subject *</label>
      <input type="text" id="subject" name="subject" required placeholder="Reason for contacting" />

      <label for="message">Message *</label>
      <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>

      <button type="submit" name="sb">Send Message</button>
    </form>
    <p class="footer-note">We will get back to you within 24 hours.</p>
  </div>
</body>
</html>
