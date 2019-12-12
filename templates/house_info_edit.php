<?php
function editHouse($house) {
$images = getImages($house['hab_id']);?>
<div class="house_page">
  <h1>Edit Information</h1>
  <form id="editform" action="actions/action_edit_house.php" method="POST">
    <div id="house_images">IMAGES</div>
    <div id="house_info">
      <div id="h_title">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($house['title'])?>" required>
      </div>
      <div id="h_location">
        <div id="region">
          <label for="region">Region:</label>
          <input type="text" name="region" value="<?= htmlspecialchars($house['region'])?>">
        </div>
        <div id="location">
          <label for="location">Location:</label>
          <input type="text" name="location" value="<?= htmlspecialchars($house['location'])?>" required>
        </div>
      </div>
      <div id="h_address">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= htmlspecialchars($house['addr'])?>" nequired>
      </div>
      <div id="h_capacity">
        <div id="capacity">
          <label for="capacity">Capacity:</label>
          <input type="number" name="capacity" value=<?=$house['capacity']?> required>
        </div>
        <div id ="n_bathrooms">
          <label for="n_bathrooms">Nº bathrooms:</label>
          <input type="number" name="n_bathrooms" value=<?=$house['nr_bathrooms']?> required>
        </div>
        <div id="n_bedrooms">
          <label for="n_bedrooms">Nº bedrooms:</label>
          <input type="number" name="n_bedrooms" value=<?=$house['nr_rooms']?> required>
        </div>
      </div>
      <div id="h_price">
        <label for="price">Price per day:
          <input type="number" name="price" value=<?=$house['price_per_day']?> required>
        </label>
      </div>
      <div id="h_description">
        <label for="description">Description:</label>
        <div id="h_desc_bot">
        <textarea name="description" rows="3" cols="80"><?= htmlspecialchars($house['description'])?></textarea>
        <div id="save_button">
          <input type="submit" name="save" value="Save">
        </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php } 

function addHouse() {?>
  <div class="house_page">
    <h1>New House</h1>
    <form id="addform" action="../actions/action_addhouse.php" method="POST">
      <div id="house_images">IMAGES</div>
      <div id="house_info">
        <div id="h_title">
          <label for="title">Title:</label>
          <input type="text" name="title" required>
        </div>
        <div id="h_location">
          <div id="region">
            <label for="region">Region:</label>
            <input type="text" name="region" >
          </div>
          <div id="location">
            <label for="location">Location:</label>
            <input type="text" name="location" required>
          </div>
        </div>
        <div id="h_address">
          <label for="address">Address:</label>
          <input type="text" name="address" required>
        </div>
        <div id="h_capacity">
          <div id="capacity">
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" required>
          </div>
          <div id ="n_bathrooms">
            <label for="n_bathrooms">Nº bathrooms:</label>
            <input type="number" name="n_bathrooms" required>
          </div>
          <div id="n_bedrooms">
            <label for="n_bedrooms">Nº bedrooms:</label>
            <input type="number" name="n_bedrooms" required>
          </div>
        </div>
        <div id="h_price">
          <label for="price">Price per day:
            <input type="number" name="price" required>
          </label>
        </div>
        <div id="h_description">
          <label for="description">Description:</label>
          <div id="h_desc_bot">
          <textarea name="description" rows="3" cols="80"></textarea>
          <div id="save_button">
            <input type="submit" name="save" value="Save">
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <?php } ?>
