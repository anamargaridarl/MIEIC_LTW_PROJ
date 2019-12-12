<?php 
  function draw401() {?>
    <div id="content-wrapper">
      <div id="error_box">
        <h1>401 Unauthorized</h1>
        <p>You do not have permission to access this page.</p>
        <p>I don't use cookies without your permission, do I?</p>
        <i class="fas fa-grin-beam-sweat fa-3x"></i>
      </div>
    </div>
  <?php }

  function draw404() {?>
    <div id="content-wrapper">
      <div id="error_box">
        <h1>404 Not Found</h1>
        <p>The page you are looking for doesn't exist.</p>
        <p>Unlike that pile of dirty laundry...</p>
        <i class="fas fa-meh-rolling-eyes fa-3x"></i>
      </div>
    </div>
  <?php }

  function draw500() {?>
    <div id="content-wrapper">
      <div id="error_box">
        <h1>500 Internal Server Error</h1>
        <p>Something went wrong, please try later.</p>
        <p>Woah! This time it's not your fault...</p>
        <i class="fas fa-surprise fa-3x"></i>
      </div>
    </div>
  <?php }

  function drawError() {?>
    <div id="content-wrapper">
      <div id="error_box">
        <h1>Something went wrong</h1>
        <p>Unexpected error occured, please try again later.</p>
        <p>Leave before there is a awkward silence...</p>
        <i class="fas fa-meh fa-3x"></i>
      </div>
    </div>
  <?php }
?>