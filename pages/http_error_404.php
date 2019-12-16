<?php 
  include_once('../templates/head.php');
  include_once('../templates/nav_bar.php');
  include_once('../templates/footer.php');

  drawHead(array("../css/houses.css","../css/navfooter.css","../css/http_error.css"), array("../js/carousel.js", "../js/modal_box.js",'../js/show_pass.js'));

  drawNavBar(false);?>

  <div id="content-wrapper">
      <div id="error_box">
        <h1>404 Not Found</h1>
        <p>The page you are looking for doesn't exist.</p>
        <p>Unlike that pile of dirty laundry...</p>
        <i class="fas fa-meh-rolling-eyes fa-3x"></i>
      </div>
    </div>
  
<?php drawFooter();?>