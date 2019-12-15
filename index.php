<?php
  chdir('pages');
  include_once('includes/session.php');
  include_once('templates/nav_bar.php');
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('templates/show_messages.php');
  drawHead(array("css/navfooter.css", "css/homepage.css"), array("modal_box.js","show_pass.js","search.js", "cities.js"));
  
  showMessages();
?>
   
    <section class="welcome">
      <?php drawNavBar(true); ?>
      <form id="exploreform" action="pages/search_rooms.php" method="GET">
        <h3 id="form_title">Houses of the World!</h3>
        <div id="whereto">
          <p>Where</p>
          <input id="searchbar" type="text" name="location" placeholder="Choose your next destination..." title="Where do you want to go for your next adventure? Search for some location and sail away!" required>
        </div>
        <div id="check">
        <div id="checkin">
          <p>Check-In</p>
          <input type="date" name="checkin" title="Choose the date when your stay shall begin...">
        </div>
        <div id="checkout">
          <p>Check-Out</p>
          <input type="date" name="checkout" title="...And when it shall end.">
        </div>
        </div>
        <div id="guestbot">
        <div id="guests">
          <p>Nº guests</p>
          <input type="number" name="guests" min="1" max="20" placeholder="1" title="How many people are coming with you? It's a single-player adventure, a romantic getaway or a group excursion? You can select up to 20 guests...">
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