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

  <div id="account">
    <a id="signupbtn" ">Sign Up</a>
    <a id="loginbtn" ">Sign In</a>
  </div>
  <div id="logged">
    <img src="profilepic.png" class="profilepic">
    <a href="profile.php">My Profile</a>
    <a href="signout.php" id="signout">Sign Out</a>
  </div>

</nav>

<?php 
    drawModal();
  } 
?>