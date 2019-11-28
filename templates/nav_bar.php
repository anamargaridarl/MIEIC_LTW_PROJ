<?php
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

<div id= "profile">
<img src="../images/profile_pic_resize.jpg" alt="Profile Picture">
<p> Nome </p>
</div>
<!-- 
<div id= "profile">
<p> SignUp </p>
<p> LogIn </p>
</div>   -->

</nav>

<?php } ?>