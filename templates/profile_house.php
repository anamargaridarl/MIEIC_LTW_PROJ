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
$images = getImages($house['hab_id']);?>
<div class="house_page">
  <h1>Houses</h1>
  <form id="editform" action="actions/action_edit_house.php" method="POST">
    <div id="house_images">IMAGES</div>
    <div id="house_info">
      <div id="h_title">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?=$house['title']?>">
      </div>
      <div id="h_location">
        <div id="region">
          <label for="region">Region:</label>
          <input type="text" name="region" value="<?=$house['region']?>">
        </div>
        <div id="location">
          <label for="location">Location:</label>
          <input type="text" name="location" value="<?=$house['location']?>">
        </div>
      </div>
      <div id="h_address">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?=$house['addr']?>">
      </div>
      <div id="h_capacity">
        <div id="capacity">
          <label for="capacity">Capacity:</label>
          <input type="text" name="capacity" value=<?=$house['capacity']?>>
        </div>
        <div id ="n_bathrooms">
          <label for="n_bathrooms">Nº bathrooms:</label>
          <input type="text" name="n_bathrooms" value=<?=$house['nr_bathrooms']?>>
        </div>
        <div id="n_bedrooms">
          <label for="n_bedrooms">Nº bedrooms:</label>
          <input type="text" name="n_bedrooms" value=<?=$house['nr_rooms']?>>
        </div>
      </div>
      <div id="h_price">
        <label for="price">Price per day:
          <input type="text" name="price" value=<?=$house['price_per_day']?>>
        </label>
      </div>
      <div id="h_description">
        <label for="description">Description:</label>
        <textarea name="description" rows="3" cols="80"><?=$house['description']?></textarea>
      </div>
      <div id="save_button">
        <input type="submit" name="save" value="Save">
      </div>
    </div>
  </form>
</div>

<div id="reservations">
</div>
<?php } ?>