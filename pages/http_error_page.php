<?php 
  include_once('../templates/head.php');
  include_once('../templates/nav_bar.php');
  include_once('../templates/footer.php');
  include_once('../templates/http_error_box.php');

  drawHead(array("../css/houses.css","../css/navfooter.css","../css/http_error.css"), array("../carousel.js", "../modal_box.js",'../show_pass.js'));

  drawNavBar(false);
  
  switch(http_response_code()) {
    case 401:
      draw401();
    break;
    case 404:
      draw404();
    break;
    case 500:
      draw500();
    break;
    case 200:
      header('Location: ../index.php'); //not supposed to come here
    break;
    default:
      drawError();
    break;
  }
  
  drawFooter();
?>