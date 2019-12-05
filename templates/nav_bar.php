<?php
  include_once('templates/modalBoxes.php');
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
  
  <?php $_SESSION['username'] = 'Joana' ?>
  <?php if(isset($_SESSION)) {?>
    <div id="logged">
      <a href="profile.php"><?= $_SESSION['username']?></a>
      <img src="../images/profile_pic.jpg" class="profilepic">
      <a href="signout.php" id="signout">Sign Out</a>
    </div>
    <?php } else { ?>
      <div id="account">
        <a id="signupbtn" href="">Sign Up</a>
        <a id="loginbtn" href="">Sign In</a>
      </div>
  <?php } ?>
</nav>

<?php 
    drawModal();
  } 
?>