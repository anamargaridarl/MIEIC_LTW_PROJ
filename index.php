<!DOCTYPE html>
<html>

<head>
  <title>Houses Of The World!</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/homepage.css" rel="stylesheet">
  <link href="css/layout.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/comments.css" rel="stylesheet">
  <link href="css/forms.css" rel="stylesheet">
</head>

<body>
  <div class="bg">
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
    
    <?php include('./templates/footer.php') ?>
  </div>
</body>

</html>