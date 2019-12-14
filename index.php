<?php
  chdir('pages');
  include_once('includes/session.php');
  include_once('templates/nav_bar.php');
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('database/users.php');
  drawHead(array("css/navfooter.css", "css/homepage.css"), array("modal_box.js"));
  ?>
  
  <body>
    <section class="welcome">
      <?php drawNavBar(); ?>
      <form id="exploreform" action="pages/search_rooms.php" method="GET">
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
          <a id="north"  href="pages/explore_rooms.php?region=north">
            <img src="/images/site/porto_explore.jpg" ><p>North</p>
          </a>
        </div>
        <div class="landscape">  
          <a id="center" href="pages/explore_rooms.php?region=center">
            <img src="/images/site/viseu_explore.jpg" ><p>Center</p>
          </a>
        </div>  
        <div class="landscape">  
          <a id="south" href="pages/explore_rooms.php?region=south">
            <img src="/images/site/algarve_explore.jpg" ><p>South</p>
          </a>
        </div>
        <div class="landscape">
          <a id="islands" href="pages/explore_rooms.php?region=islands">
            <img src="/images/site/madeira_explore.jpg" ><p>Islands</p>
          </a>
        </div>
      </div>
    </section>  
    <?php drawFooter() ?>
  </body>
</html>