<?php
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('templates/nav_bar.php');
  drawHead(array("css/navfooter.css", "css/homepage.css"), array("modalBox.js"));
  ?>
  
  <body>
    <section class="welcome">
      <?php drawNavBar(); ?>
      <form id="exploreform" action="search_rooms.php" method="GET">
        <h3 id="form_title">Houses of the World!</h3>
        <div id="whereto">
          <p>Where</p>
          <input type="text" name="location" placeholder="Choose your next destination...">
        </div>
        <div id="check">
        <div id="checkin">
          <p>Check-In</p>
          <input type="date" name="checkin">
        </div>
        <div id="checkout">
          <p>Check-Out</p>
          <input type="date" name="checkout">
        </div>
        </div>
        <div id="guestbot">
        <div id="guests">
          <p>Nº guests</p>
          <input type="number" name="guests" min="1" max="8" placeholder="1">
        </div>
        <div id="button">
        <input id="search" type="submit" value="Search">
        </div>
        </div>

      </form>
    </section>
    <section class="explore">
      <p>Explore</p>
      <div id="regions">
        <div class="landscape">
        <a id="north"  href="explore_rooms.php?region=north">
          </a>
            <img src="/images/porto_explore.jpg" >
            <p>North</p>
          </div>
        <div class="landscape">  
        <a id="center" href="explore_rooms.php?region=center">
          </a>
            <img src="/images/viseu_explore.jpg" >
            <p>Center</p>
          </div>  
        <div class="landscape">  
        <a id="south" href="explore_rooms.php?region=south">
          </a>
            <img src="/images/algarve_explore.jpg" >
            <p>South</p>
          </div>
        <div class="landscape">
        <a id="islands" href="explore_rooms.php?region=islands">
          </a>
              <img src="/images/madeira_explore.jpg" >
            <p>Islands</p>
          </div>
      </div>
    </section>  
    <?php drawFooter() ?>
  </body>
</html>