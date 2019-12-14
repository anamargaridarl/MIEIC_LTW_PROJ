<?php
  include_once('modal_boxes.php');
  include_once('../includes/session.php');

  function drawNavBar() {
?>

<nav id="navbar">
  <div id="logo">
  <a id="homepage"  href="../index.php">
  <img src="../images/logodemo.png" alt="Logo">
  </a>
  </div>

  <div class="input-container">
    <i class="material-icons">search</i>
    <form id="input" method="get" action="search_rooms.php" method ="GET">
    <p><input id='input-field' type="text" placeholder="Local" name="location">
      <section id="details-form">
        <label for="guests">Guests</label>
        <input type="number" id="guests" name="guests">

        <label for="nights">Nights</label>
        <input type="number" id="nights" name="nights">

        <label for="checkin">Checkin date</label>
        <input type="date" id="checkin" name="checkin">

        <label for="checkout">Checkout date</label>
        <input type="date" id="checkout" name="checkout">
        <input type="submit" value="Submit">
      </section>
    </p>
    </form>
  </div>
  
  <?php if(isset($_SESSION['email'])) {?>
    <div id="logged">
      <div><img src="../images/profile_pic.jpg" class="profilepic"></div>
      
      <?php if (strpos(getcwd(), '/pages') > 0) { ?>
        <a href="profile.php"><?= $_SESSION['username']?></a>
      <?php } else { ?>
        <a href="pages/profile.php"><?= $_SESSION['username']?></a>
      <?php } ?>

        <a href="../actions/action_signout.php" id="signout">Sign Out</a>
    </div>
    <?php } else { ?>
      <div id="account">
        <a id="signupbtn" >Sign Up</a>
        <a id="loginbtn">Sign In</a>
      </div>
  <?php } ?>
</nav>

<?php 
    drawModal();
  } 
?>