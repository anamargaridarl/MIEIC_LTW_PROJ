<?php
  include_once('modal_boxes.php');
  include_once('../includes/session.php');

  function drawNavBar() {
?>

<nav id="navbar">
  <div id = "logosearch">
  <div id="logo">
  <a id="homepage"  href="../index.php">
  <img src="../images/logodemo.png" alt="Logo">
  </a>
  </div>

  <div class="input-container">
    <i class="material-icons">search</i>
    <form id="input" method="get" action="search_rooms.php" method ="GET">
    <input class="input-field" id='input-field' type="text" placeholder="Local" name="location">
    </form>
  </div>
  </div>
  
  <div id = "accountlog">

  <?php if(isset($_SESSION['email'])) {?>
    <div id="logged">
      <div><img src="../images/profile_pic.jpg" class="profilepic"></div>
      
      <?php if (strpos(getcwd(), '/pages') > 0) { ?>
        <a href="profile.php"><?= htmlspecialchars($_SESSION['username'])?></a>
      <?php } else { ?>
        <a href="pages/profile.php"><?= htmlspecialchars($_SESSION['username'])?></a>
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