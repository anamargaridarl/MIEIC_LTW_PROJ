<?php
  function drawNavBar() {
?>

<nav id="navbar">
  <div id="logo">
  <img src="../images/logodemo.png" alt="Logo">
  </div>

  <form id="explore" action="search_rooms.php" method="GET">
  <div class="input-container">
    <i class="material-icons">search</i>
    <input class="input-field" type="text" placeholder="Local" name="Location">
  </div>
  </form>

<div id= "profile">
  <img src="../images/profile_pic_resize.jpg" alt="Profile Picture">
  <a href="profile_reservation_page.php"> Nome </a>
</div>
<!-- 
<div id= "profile">
<p> SignUp </p>
<p> LogIn </p>
</div>   -->

</nav>

<?php } ?>