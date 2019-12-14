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
        <input type="text" name="title" value="<?= htmlspecialchars($house['title'])?>" title="Give a nice name for your property, you want to catch the attention of all users..." required>
      </div>
      <div id="h_location">
        <div id="region">
          <label for="region">Region:</label>
          <input type="text" name="region" value="<?= htmlspecialchars($house['region'])?>" title="Which region of the country is your place in? In order to appear in most searches you should choose one of these: Norte, Sul, Centro or Islands." required>
        </div>
        <div id="location">
          <label for="location">Location:</label>
          <input type="text" name="location" value="<?= htmlspecialchars($house['location'])?>" title="Which city or village is your place in?" required>
        </div>
      </div>
      <div id="h_address">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= htmlspecialchars($house['addr'])?>" title="Give a more specific address to your place so your guests can find it easier..." nequired>
      </div>
      <div id="h_capacity">
        <div id="capacity">
          <label for="capacity">Capacity:</label>
          <input type="number" name="capacity" value=<?=$house['capacity']?> title="How many guests can you accomodate in your place? Should be from 1 to 20..." min="1" max="20" required>
        </div>
        <div id ="n_bathrooms">
          <label for="n_bathrooms">Nº bathrooms:</label>
          <input type="number" name="n_bathrooms" value=<?=$house['nr_bathrooms']?> title="How many restrooms does your place have. Remember, this can be a big deal for some customers, so be truthful." required>
        </div>
        <div id="n_bedrooms">
          <label for="n_bedrooms">Nº bedrooms:</label>
          <input type="number" name="n_bedrooms" value=<?=$house['nr_rooms']?> title="How many bedrooms does your place have." required>
        </div>
      </div>
      <div id="h_price">
        <label for="price">Price per day:
          <input type="number" name="price" value=<?=$house['price_per_day']?> title="The price you will charge per day. Unless you are not looking to make profit, you should set a price higher than 0..." min="0" required>
        </label>
      </div>
      <div id="h_description">
        <label for="description">Description:</label>
        <div id="h_desc_bot">
        <textarea name="description" rows="3" cols="80" title="Detail your place a little more, what special features does it have: pool, barbecue, jacuzzi, pet friendly, smoking allowed, etc..." required><?= htmlspecialchars($house['description'])?></textarea>
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
          <input type="text" name="title" title="Give a nice name for your property, you want to catch the attention of all users..." required>
        </div>
        <div id="h_location">
          <div id="region">
            <label for="region">Region:</label>
            <input type="text" name="region" title="Which region of the country is your place in? In order to appear in most searches you should choose one of these: Norte, Sul, Centro or Islands." required>
          </div>
          <div id="location">
            <label for="location">Location:</label>
            <input type="text" name="location" title="Which city or village is your place in?" required>
          </div>
        </div>
        <div id="h_address">
          <label for="address">Address:</label>
          <input type="text" name="address" title="Give a more specific address to your place so your guests can find it easier..." required>
        </div>
        <div id="h_capacity">
          <div id="capacity">
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" title="How many guests can you accomodate in your place? Should be from 1 to 20..." min="1" max="20" required>
          </div>
          <div id ="n_bathrooms">
            <label for="n_bathrooms">Nº bathrooms:</label>
            <input type="number" name="n_bathrooms" title="How many restrooms does your place have. Remember, this can be a big deal for some customers, so be truthful." required>
          </div>
          <div id="n_bedrooms">
            <label for="n_bedrooms">Nº bedrooms:</label>
            <input type="number" name="n_bedrooms" title="How many bedrooms does your place have." required>
          </div>
        </div>
        <div id="h_price">
          <label for="price">Price per day:
            <input type="number" name="price" title="The price you will charge per day. Unless you are not looking to make profit, you should set a price higher than 0..." min="0" required>
          </label>
        </div>
        <div id="h_description">
          <label for="description">Description:</label>
          <div id="h_desc_bot">
          <textarea name="description" rows="3" cols="80" title="Detail your place a little more, what special features does it have: pool, barbecue, jacuzzi, pet friendly, smoking allowed, etc..." required></textarea>
          <div id="save_button">
            <input type="submit" name="save" value="Save">
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <?php } ?>
