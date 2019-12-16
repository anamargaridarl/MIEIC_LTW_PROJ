<?php 
  include_once('../templates/head.php');
  include_once('../templates/nav_bar.php');
  include_once('../templates/footer.php');

  drawHead(array("../css/houses.css","../css/navfooter.css","../css/http_error.css"), array("../js/carousel.js", "../js/modal_box.js",'../js/show_pass.js'));

  drawNavBar(false);?>
  
  <div id="content-wrapper">
      <div id="error_box">
        <h1>401 Unauthorized</h1>
        <p>You do not have permission to access this page.</p>
        <p>I don't use cookies without your permission, do I?</p>
        <i class="fas fa-grin-beam-sweat fa-3x"></i>
      </div>
  </div>
  
  <?php drawFooter();?>