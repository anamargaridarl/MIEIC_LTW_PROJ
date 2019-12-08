<?php
  include_once('database/getters.php');
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('templates/profile_house.php');
  include_once('templates/nav_bar.php');
  include_once('templates/profile_sidemenu.php');

  drawHead(array("css/profilehouse.css", "css/profile_sidemenu.css","css/navfooter.css"), array('modalBox.js'));
  drawNavBar();
?>
  <div class="middle">
<?php
  drawSideMenu();
  $house_id = $_GET['id'];
  $house = get_owner_house(3,$house_id); //REPLACE WITH VARIABLE
  editHouse($house);
?>
  </div>
<?php drawFooter(); ?>