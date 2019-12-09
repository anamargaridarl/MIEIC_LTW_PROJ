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
        <div id="h_desc_bot">
        <textarea name="description" rows="3" cols="80"><?=$house['description']?></textarea>
        <div id="save_button">
          <input type="submit" name="save" value="Save">
        </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php } ?>