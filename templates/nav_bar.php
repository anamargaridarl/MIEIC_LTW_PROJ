<?php
  include_once('templates/modalBoxes.php');
  include_once('includes/session.php');

  function drawNavBar() {
?>

<nav id="navbar">
  <div id="logo">
  <img src="../images/logodemo.png" alt="Logo">
  </div>

  <div class="input-container">
    <i class="material-icons">search</i>
    <input class="input-field" type="text" placeholder="Local" name="Location">
  </div>
  
  <?php if(isset($_SESSION['email'])) {?>
    <div id="logged">
      <div><img src="../images/profile_pic.jpg" class="profilepic"></div>
      <a href="profile.php"><?= $_SESSION['username']?></a>
      <a href="actions/action_signout.php" id="signout">Sign Out</a>
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