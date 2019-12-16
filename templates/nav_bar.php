<?php
  include_once('modal_boxes.php');
  include_once('../includes/session.php');
  include_once('../database/users.php');

  function drawNavBar($index) {
?>

<nav id="navbar">
  
  <div id = "logosearch">
    <div id="logo">
      <a id="homepage"  href="../index.php">
      <img src="../images/logodemo2.png" alt="Logo" width = 80px height= 80px>
      </a>
    </div>

    <div class="input-container">
      <i class="material-icons">search</i>
      <form id="input" action="../pages/search_rooms.php" method ="GET" autocomplete="off">
      <p>
        <input required id='input-field' type="text" placeholder="Local" name="location">
        <div id="details-form">
          <label for="guests">Guests</label>
          <input required type="number" id="guests" name="guests">

          <label for="checkin">Checkin date</label>
          <input type="date" id="checkin" name="checkin">

          <label for="checkout">Checkout date</label>
          <input type="date" id="checkout" name="checkout">
          <input disabled type="submit" id="submit" value="Submit">
        </div>

      </p>
      </form>
    </div>
  </div>
  
  <div id = "accountlog">

  <?php if(isset($_SESSION['email'])) {?>
    <div id="logged">
      <div><img src="<?=getThumbnailLink($_SESSION['username'])?>" class="profilepic"></div>
      
      <?php if ($index) { ?>
        <a href="../pages/profile.php"><?= htmlspecialchars($_SESSION['username'])?></a>
      <?php } else {?>
        <a href="../pages/profile.php"><?= htmlspecialchars($_SESSION['username'])?></a>

      <?php } ?>

        <a href="../actions/action_signout.php" id="signout">Sign Out</a>
    </div>
    <?php } else { ?>
      <div id="account">
        <a id="signupbtn" >Sign Up</a>
        <a id="loginbtn">Sign In</a>
      </div>
  <?php } ?>
  </div>
</nav>

<?php 
    drawModal();
  } 
?>