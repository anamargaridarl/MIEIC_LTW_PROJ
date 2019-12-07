<?php

function drawHouses($houses) { ?>

<div class="house_page">
  <h1>Houses</h1>

<?php foreach ($houses as $house): 
  $images = getImages($house['hab']);?>
  <a class="house" href="houses_page.php?id=<?=$house['hab']?>">
    <div class="img">
      <img src=<?= $images[0]['link'] ?> alt="House Photo" width="250em" height="250em">
    </div>
    <div class="text">
      <p><?= $house['title'] ?></p>
      <p><?= $house['region'] ?> , <?= $house['location'] ?></p>
      <p>Address: <?= $house['addr'] ?></p>
      <p>Capacity:<?= $house['capacity'] ?></p>
      <p>Price: <?= $house['price_per_day'] ?>€/night</p>
    </div>
</a>
<?php endforeach ?>
  <div class="addhouse">
    <a href="profile.php"> + </a>
  </div>
</div>
<?php } ?>