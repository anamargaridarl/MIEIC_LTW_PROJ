<?php
  include_once('templates/modalBoxes.php');
  function drawNavBar() {
?>

<nav id="navbar">
  <div id="logo">
  <a id="homepage"  href="index.php">
  <img src="../images/logodemo.png" alt="Logo">
  </a>
  </div>

  <div class="input-container">
    <i class="material-icons">search</i>
    <form id="input" method="get" action="http://localhost:8088/search_rooms.php" method ="GET">
    <input class="input-field" id='input-field' type="text" placeholder="Local" name="Location">
    </form>
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