<!DOCTYPE html>
<html>

<head>
  <title>Houses Of The World!</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/homepage.css" rel="stylesheet">
  <link href="css/navfooter.css" rel="stylesheet">
</head>

<body>
  <section class="welcome">
    <nav id="navbar">
      <div id="account">
        <a href="#signup">Sign Up</a>
        <a href="#login">Log In</a>
      </div>
      <div id="logged">
        <img src="profilepic.png" class="profilepic">
        <a href="profile.html">My Profile</a>
        <a href="#" id="signout">Sign Out</a>
      </div>
    </nav>
    <form id="explore" action="search_rooms.php" method="GET">
      <h3 id="form_title">Houses of the World!</h3>
      <div id="whereto">
        <p>Where</p>
        <input type="text" name="location">
      </div>
      <div id="checkin">
        <p>Check-In</p>
        <input type="date" name="checkin">
      </div>
      <div id="checkout">
        <p>Check-Out</p>
        <input type="date" name="checkout">
      </div>
      <div id="guests">
        <p>Nº guests</p>
        <input type="number" name="guests" min="1" max="8">
      </div>
      <input id="search" type="submit" value="Search">
    </form>
    <section id="signup">
      <p>Let's go on a adventure</p>
    </section>
    <section id="login">
      <p>Let's get back to business.</p>
    </section>
  </section>
  <section class="explore">
    <p>Explore</p>
    <div>
      <a id="north" href="list_rooms/north.php">
        <div class="landscape">
          <img src="/images/porto_explore.jpg" >
        </div>
        <p>North</p>
      </a>
      <a id="center" href="list_rooms/center.php">
        <div class="landscape">  
          <img src="/images/viseu_explore.jpg" >
        </div>  
        <p>Center</p>
      </a>
      <a id="south" href="list_rooms/south.php">
        <div class="landscape">  
          <img src="/images/algarve_explore.jpg" >
        </div>
        <p>South</p>
      </a>
      <a id="islands" href="list_rooms/islands.php">
        <div class="landscape">
          <img src="/images/madeira_explore.jpg" >
        </div>
        <p>Islands</p>
      </a>
    </div>
  </section>  
  <?php include('./templates/footer.php') ?>
</body>
</html>