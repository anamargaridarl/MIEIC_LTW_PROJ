<?php
function editHouse($house) {
$images = getImages($house['hab_id']);?>
<div class="house_page">
  <h1>Edit Information</h1>
  <form id="editform" action="../actions/action_update_house.php?id=<?=$house['hab_id']?>" method="POST">
    <div id="house_images">IMAGES</div>
    <div id="house_info">
      <div id="h_title">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($house['title'])?>">
      </div>
      <div id="h_location">
        <div id="region">
          <label for="region">Region:</label>
          <input type="text" name="region" value="<?= htmlspecialchars($house['region'])?>">
        </div>
        <div id="location">
          <label for="location">Location:</label>
          <input type="text" name="location" value="<?= htmlspecialchars($house['location'])?>">
        </div>
      </div>
      <div id="h_address">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= htmlspecialchars($house['addr'])?>">
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
      <div id="house_images">
        <label for="h_images">Add pictures:</label>
        <input type="file" name="h_images" accept=".jpg, .jpeg, .png" multiple title="Add some pictures for users to check your house. We required at least one photo of the house." required>
      </div>
      <div id="house_info">
        <div id="h_title">
          <label for="title">Title:</label>
          <input type="text" name="title" ?>
        </div>
        <div id="h_location">
          <div id="region">
            <label for="region">Region:</label>
            <input type="text" name="region" >
          </div>
          <div id="location">
            <label for="location">Location:</label>
            <input type="text" name="location" >
          </div>
        </div>
        <div id="h_address">
          <label for="address">Address:</label>
          <input type="text" name="address" >
        </div>
        <div id="h_capacity">
          <div id="capacity">
            <label for="capacity">Capacity:</label>
            <input type="text" name="capacity" >
          </div>
          <div id ="n_bathrooms">
            <label for="n_bathrooms">Nº bathrooms:</label>
            <input type="text" name="n_bathrooms" >
          </div>
          <div id="n_bedrooms">
            <label for="n_bedrooms">Nº bedrooms:</label>
            <input type="text" name="n_bedrooms" >
          </div>
        </div>
        <div id="h_price">
          <label for="price">Price per day:
            <input type="text" name="price" >
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
