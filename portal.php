<?php
// You can handle login submission with PHP logic later
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Portal</title>
  <link rel="stylesheet" href="css/style.css" />
 
</head>
<body>
  <header>
    <h1>Global University</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="courses.php">Courses</a>
      <a href="faculty.php">Faculty</a>
      <a href="portal.php">Portal</a>
    </nav>
  </header>

  <section class="content">
    <h2>Student Login</h2>
    <form method="post" action="login_process.php">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Global University. All rights reserved.</p>
  </footer>
</body>
</html>
