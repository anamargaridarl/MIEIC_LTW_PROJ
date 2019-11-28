<?php
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('templates/nav_bar.php');
  drawHead(array("css/navfooter.css", "css/homepage.css"), array("modalBox.js"));
  ?>
  
  <body>
    <section class="welcome">
      <?php drawNavBar(); ?>
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
    <?php drawFooter() ?>
  </body>
</html>