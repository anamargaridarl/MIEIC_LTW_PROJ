<?php 
  include_once('../templates/head.php');
  include_once('../templates/nav_bar.php');
  include_once('../templates/footer.php');

  drawHead(array("../css/houses.css","../css/navfooter.css","../css/http_error.css"), array("../js/carousel.js", "../js/modal_box.js",'../js/show_pass.js'));

  drawNavBar(false);?>

    <div id="content-wrapper">
      <div id="error_box">
        <h1>500 Internal Server Error</h1>
        <p>Something went wrong, please try later.</p>
        <p>Woah! This time it's not your fault...</p>
        <i class="fas fa-surprise fa-3x"></i>
      </div>
    </div>
  
  <?php drawFooter();?>