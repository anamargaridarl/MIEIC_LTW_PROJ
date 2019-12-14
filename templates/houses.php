<?php 
  include_once('nav_bar.php');
  include_once('head.php');
  include_once('footer.php');
  include_once('../database/getters.php');

 function drawHouse($house_id, $images, $checkin, $checkout, $user_email) {
   $house = getRoom($house_id);
?>

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
  <h1> <?= $house['title'] ?> </h1>
  </div>

  <div class="title2">
  <h2><?= $house['location'] ?></h2>
  <p> <?= $house['capacity'] ?> guests <?= $house['nr_rooms'] ?> bedrooms <?= $house['nr_bathrooms'] ?> bathrooms </p>
  </div>


<div class="texthouse">
<p> <?= $house['description'] ?> </p>
</div>

<div class="owner">
<img src="../images/profile_pic_resize.jpg" alt="Profile Picture">
  <p><?= get_username($user_email) ?></p>
</div>

<div class="book">
  <?php 
        $diff = abs(strtotime($checkout)-strtotime($checkin));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $nights = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $per_day = $house['price_per_day'];
        $total = $per_day  * $nights?>
  <h2>Nights: <?=$nights?> * <?= $house['price_per_day'] ?> €</h2>
  <h3>Total:  <?= $total ?> € </h3>
  <a href="reservation.php?id=<?= $house_id ?>&checkin=<?= $checkin ?>&checkout=<?= $checkout ?>">Book Now</a>
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

<?php } ?>
