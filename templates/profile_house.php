<?php
  include_once('templates/head.php');
  include_once('templates/footer.php');
  include_once('templates/nav_bar.php');

  drawHead(array("css/profilehouse.css", "css/navfooter.css"), array());
?>

<body>
  <?php drawNavBar() ?>
<h1>Houses</h1>

<div class="reservation">
<div class="img">
<img src="https://picsum.photos/300/200" alt="House Photo" width="250em" height="150em">
</div>

<div class="text">
  <p>Title</p>
  <p>Local</p>
</div>
</div>

  <?php drawFooter() ?>

</body>

</html>