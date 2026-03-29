<?php
$events = [
  'Music' => [
    ['title' => 'Campus Music Night', 'image' => 'https://www.collegiate-ac.com/propeller/uploads/sites/2/2021/11/AdobeStock_212221994-min-1-1450x967.jpeg', 'date' => '2025-07-10', 'location' => 'Main Auditorium'],
    ['title' => 'Battle of Bands', 'image' => 'https://www.michigandaily.com/wp-content/uploads/2024/02/aru.ART_.battleofthebands.01.27.24.-120.jpg', 'date' => '2025-08-05', 'location' => 'Open Grounds'],
  ],
  'Sports' => [
    ['title' => 'Inter-College Football Match', 'image' => 'https://th.bing.com/th/id/OIP.Hw8_OPtR_1Hu1HJvGLAgRgHaFR?o=7rm=3&rs=1&pid=ImgDetMain', 'date' => '2025-07-15', 'location' => 'Sports Complex'],
    ['title' => 'Annual Marathon', 'image' => 'https://th.bing.com/th/id/OIP.P8nFHLTf0pRs0U9wE3uUhwHaE8?rs=1&pid=ImgDetMain', 'date' => '2025-08-22', 'location' => 'City Park'],
  ],
  'Tech' => [
    ['title' => 'Hackathon 2025', 'image' => 'https://th.bing.com/th/id/OIP.RSUBLZ43AfCNTEjEa2rnQQHaE8?rs=1&pid=ImgDetMain', 'date' => '2025-09-01', 'location' => 'CS Block'],
    ['title' => 'AI Workshop', 'image' => 'https://tse3.mm.bing.net/th/id/OIP.bOp8ohk2_drZgmkms0Jo5gHaEb?rs=1&pid=ImgDetMain&o=7&rm=3', 'date' => '2025-09-10', 'location' => 'Room 305'],
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>University Events</title>
 <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header>
  <h1>University Events</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="events.php">Events</a>
    <a href="register.php">Register</a>
    <a href="contact.php">Contact</a>
  </nav>
</header>

<main>
  <?php foreach ($events as $category => $eventList): ?>
    <div class="category">
      <h2><?php echo $category; ?> Events</h2>
      <div class="events">
        <?php foreach ($eventList as $event): ?>
          <div class="event-card">
            <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>">
            <div class="event-content">
              <h3><?php echo $event['title']; ?></h3>
              <p><strong>Date:</strong> <?php echo $event['date']; ?></p>
              <p><strong>Location:</strong> <?php echo $event['location']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</main>

<footer>
  <p>&copy; 2025 University Events. All rights reserved.</p>
</footer>

</body>
</html>
