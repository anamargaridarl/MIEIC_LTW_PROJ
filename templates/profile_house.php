<?php

function drawHouses($houses) { ?>

<div class="house_page">
  <h1>Houses</h1>

<?php foreach ($houses as $house): 
  $images = getImages($house['hab']);?>
  <a class="house" href="profile_edit_house.php?id=<?=$house['hab']?>">
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
<?php } 

function editHouse($house) {
$images = getImages($house['hab']);?>
<div class="house_page">
  <h1>Houses</h1>
  <form id="editform" action="actions/action_edit_house.php" method="POST">
    <div id="house_images">IMAGES</div>
    <div id="house_info">
      <div id="h_title">
        <label for="title">Title:</label>
        <input type="text" name="title" value=<?=$house['title']?>>
      </div>
      <div id="h_location">
        <label for="region">Region:</label>
        <input type="text" name="region" value=<?=$house['region']?>>
        <label for="location">Location:</label>
        <input type="text" name="location" value=<?=$house['location']?>>
      </div>
      <div id="h_address">
      <label for="address">Address:</label>
        <input type="text" name="address" value=<?=$house['address']?>>
      </div>
      <div id="h_capacity">
        <label for="capacity">Capacity:</label>
        <input type="text" name="capacity" value=<?=$house['capacity']?>>
        <label for="n_bathrooms">Nº bathrooms:</label>
        <input type="text" name="n_bathrooms" value=<?=$house['nr_bathrooms']?>>
        <label for="n_bedrooms">Nº bedrooms:</label>
        <input type="text" name="n_bedrooms" value=<?=$house['nr_edrooms']?>>
      </div>
      <div id="h_price">
      <label for="price">Price per day:</label>
        <input type="text" name="price" value=<?=$house['price_per_day']?>>
      </div>
      <div id="h_description">
      <label for="description">Description:</label>
        <input type="text" name="description" value=<?=$house['description']?>>
      </div>
      <div id="save_button">
        <input type="submit" name="save" value="Save">
      </div>
    </div>
  </form>
</div>
<?php } ?>