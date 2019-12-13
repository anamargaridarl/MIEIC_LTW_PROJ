<?php

function drawHouses($houses) { ?>

<div class="house_page">
  <h1>Houses</h1>

<?php foreach ($houses as $house): 
  $images = getImages($house['hab']);?>
  <div class="house">
    <div class="img">
      <img src=<?= urlencode($images[0]['link']) ?> alt="House Photo" width="250em" height="250em">
    </div>
    <div class="text">
      <a href="house_info_page.php?id=<?=$house['hab_id']?>"><?= htmlspecialchars($house['title']) ?></a>
      <p><?= htmlspecialchars($house['region']) ?> , <?= htmlspecialchars($house['location']) ?></p>
      <p>Address: <?= htmlspecialchars($house['addr']) ?></p>
      <p>Capacity:<?= htmlspecialchars($house['capacity']) ?></p>
      <p>Price: <?= $house['price_per_day'] ?>€/night</p>
    </div>
</div>
<?php endforeach ?>
  <div class="addhouse">
    <a href="../pages/house_info_edit_page.php"> + </a>
  </div>
</div>
<?php } ?>
