<!DOCTYPE html>
<html>

<head>
  <title>Houses Of The World!</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/navfooter.css" rel="stylesheet">
  <link href="css/homepage.css" rel="stylesheet">
</head>

<body>
  <section class="welcome">
    <nav id="navbar">
      <div id="account">
        <a id="signupbtn" href="#signup">Sign Up</a>
        <a id="loginbtn" href="#login">Sign In</a>
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
        <input type="text" name="location" placeholder="Choose your next destination...">
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
        <input type="number" name="guests" min="1" max="8" placeholder="1">
      </div>
      <input id="search" type="submit" value="Search">
    </form>
    <section id="modalSignup">
      <div id="signup">
        <p id="signTitle">Sign Up</p>
        <div id="username">
          <p>Name</p>
          <input type="text" name="username" placeholder="Enter your Username...">
        </div>
        <div id="email">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter a valid email...">
        </div>
        <div id="password">
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter a valid password...">
        </div>
        <div id="register">
          <input type="submit" value="Register">
        </div>
      </div>
    </section>
    <section id="modalLogin">
      <div id="login">
        <p id="loginTitle">Sign In</p>
        <div id="email">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter your email account...">
        </div>
        <div id="password">
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter your password...">
        </div>
        <div id="log">
          <input type="submit" value="Login">
        </div>
      </div>
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
  <script src="modalBox.js"></script>
</body>
</html>