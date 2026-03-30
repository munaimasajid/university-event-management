<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>University Events | Home</title>
  <link rel="stylesheet" href="css/style.css">
  
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

<section class="hero">
  <h2>Welcome to Our University Events</h2>
  <p>Stay updated with all the latest events happening at our university.</p>
</section>

<h1>Upcoming Events by Category</h1>

<div class="category" id="music">
  <h2>Music Events</h2>
  <div class="events-grid" id="music-events"></div>
</div>

<div class="category" id="sports">
  <h2>Sports Events</h2>
  <div class="events-grid" id="sports-events"></div>
</div>

<div class="category" id="tech">
  <h2>Tech Events</h2>
  <div class="events-grid" id="tech-events"></div>
</div>

<div class="category" id="food">
  <h2>Food Events</h2>
  <div class="events-grid" id="food-events"></div>
</div>

<div class="category" id="art">
  <h2>Art Events</h2>
  <div class="events-grid" id="art-events"></div>
</div>

<script>
  const categories = {
    music: {
      prefix: 'Music Fest',
      count: 1,
      imageUrl: 'https://th.bing.com/th/id/OIP.tHjZhOjkIOG8wczLTrMl4gHaDt?o=7rm=3&rs=1&pid=ImgDetMain'
    },
    sports: {
      prefix: 'Sports Meet',
      count: 1,
      imageUrl: 'https://tse3.mm.bing.net/th/id/OIP.SXlU0jBgYehkXV3yxlVrNAHaFR?rs=1&pid=ImgDetMain&o=7&rm=3'
    },
    tech: {
      prefix: 'Tech Conference',
      count: 1,
      imageUrl: 'https://tse3.mm.bing.net/th/id/OIP.SkMEhv3ji9cjcwWDiSsrmwHaE8?w=1920&h=1280&rs=1&pid=ImgDetMain&o=7&rm=3'
    },
    food: {
      prefix: 'Food Carnival',
      count: 1,
      imageUrl: 'https://th.bing.com/th/id/OIP.Yo1rnE2TWB7w9Gs9LpJPNwHaEq?rs=1&pid=ImgDetMain'
    },
    art: {
      prefix: 'Art Expo',
      count: 1,
      imageUrl: 'https://img.freepik.com/premium-vector/exhibition-visitors-viewing-gallery-with-modern-abstract-painting-contemporary-exposition-hall-flat-cartoon-background-vector-illustration_2175-20736.jpg?w=2000'
    },
  };

  function createEventCard(name, image) {
    const card = document.createElement('div');
    card.className = 'event-card';

    const img = document.createElement('img');
    img.src = image;
    img.alt = name;
    img.className = 'event-image';

    const title = document.createElement('div');
    title.className = 'event-name';
    title.textContent = name;

    card.appendChild(img);
    card.appendChild(title);

    return card;
  }

  Object.entries(categories).forEach(([categoryId, data]) => {
    const container = document.getElementById(`${categoryId}-events`);
    for (let i = 1; i <= data.count; i++) {
      const imageUrl = `${data.imageUrl}&sig=${i}`;
      const eventName = `${data.prefix} #${i}`;
      const card = createEventCard(eventName, imageUrl);
      container.appendChild(card);
    }
  });
</script>

<footer>
  <p>&copy; 2025 University Events. All rights reserved.</p>
</footer>
</body>
</html>
