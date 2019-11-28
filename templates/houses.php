<?php 
  include_once('nav_bar.php');
  include_once('head.php');
  include_once('footer.php');
  include_once('../database/rooms.php');
  
  if(isset($_GET['id'])){
    $product_id = $_GET['id'];
  }

  $houses = getRoom($product_id);
  $images = getImages($product_id);

  drawHead(array("css/houses.css", "css/navfooter.css"), array("carousel.js"));
?>

<?php drawNavBar() ?>

  <div class="slideshow-container">
    <a class="prev" >&#10094;</a>

  <div id="Images">
   <?php foreach ($images as $image): ?>
    <div class="mySlides">
      <img src=<?= $image['link'] ?> >
    </div>
  <?php endforeach ?>

  </div>

  <a class="next" >&#10095;</a>
  </div>
<div class="bottom">
  
  <div class="title">
  <h1> <?= $houses['title'] ?> </h1>
  </div>

  <div class="title2">
  <h2><?= $houses['location'] ?></h2>
  <p> Number divisions</p>
  </div>


<div class="texthouse">
<p> <?= $houses['description'] ?> </p>
</div>

<div class="owner">
<img src="../images/profile_pic_resize.jpg" alt="Profile Picture">
  <p>Joana</p>
</div>

<div class="book">
  <h2>Nights: 2*<?= $houses['price_per_day'] ?> €</h2>
  <h3>Total:  <?= $houses['price_per_day'] * 2 ?> € </h3>
  <button type="button">Book Now</button>
</div>


  <div id="map"></div>
  <script>
  function initMap() {
  var uluru = {lat: -25.344, lng: 131.036};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0Y0wHsbht-eyF0oxEXu5FoiLmvkmG2l4&callback=initMap">
  </script>
</div>

<?php drawFooter() ?>