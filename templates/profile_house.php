<?php

function drawHouses($houses) { ?>

<h1>Houses</h1>

<?php foreach ($houses as $house): 
  $images = getImages($house['hab']);?>
<div class="house">
<div class="img">
<img src=<?= $images[0]['link'] ?> alt="House Photo" width="250em" height="150em">
</div>
<div class="text">
  <p><?= $house['title'] ?></p>
  <p><?= $house['location'] ?></p>
  <p>Capacity:<?= $house['capacity'] ?></p>
  <p>Price: <?= $house['price_per_day'] ?>€/night</p>
</div>
</div>
<?php endforeach ?>

<div class="addhouse">
<a href="profile.php"> + </a>
</div>




<?php } ?>

