<!DOCTYPE html>
<html>

<head>
  <title>Houses Of The World!</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/homepage.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
  <div class="bg">
  
      <?php
        include('navBar.php'); 
     ?>

    <form id="explore" action="search_rooms.php" method="GET">
      <h3 id="form_title">Houses of the World!</h3>
      <div id="whereto">
        Where<br>
        <input type="text" name="location">
      </div>
      <div id="checkin">
        Check-In<br>
        <input type="date" name="checkin">
      </div>
      <div id="checkout">
        Check-Out<br>
        <input type="date" name="checkout">
      </div>
      <div id="guests">
        Nº guests<br>
        <input type="number" name="guests">
      </div>
      <input id="search" type="submit" value="Search">
    </form>
    <section id="signup">
      <p>Let's go on a adventure</p>
    </section>
    <section id="login">
      <p>Let's get back to business.</p>
    </section>
    <footer>
      <div id="contacts">
        <a href="contacts.html">Contacts</a>
      </div>
      <div>
        <a href="about_us.html">About Us</a>
      </div>
      <div id="atname">
        <p>@2019 HousesOfTheWorld&trade;</p>
      </div>
    </footer>
  </div>
</body>

</html>