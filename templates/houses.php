<?php 
  include_once('nav_bar.php');
  include_once('head.php');
  include_once('footer.php');
  include_once('../database/getters.php');

 function drawHouse($house_id, $images, $checkin, $checkout, $user_email, $guests) {
   $house = getRoom($house_id);
?>

  <div class="slideshow-container">
    <a class="prev" >&#10094;</a>
    <div id="Images">
      <?php foreach ($images as $image): ?>
        <div class="mySlides">
          <img src=<?= "../images/houses/" . urlencode($image['link']) ?> >
        </div>
      <?php endforeach ?>
    </div>

  <a class="next" >&#10095;</a>
  </div>


<div id="bottom">
  
  <div id="left">

    <div id="top">
    
      <div id="titles">
    
        <div class="title">
          <h1> <?= $house['title'] ?> </h1>
        </div>

        <div class="title2">
          <h2><?= $house['location'] ?></h2>
          <p> <?= $house['capacity'] ?> guests <?= $house['nr_rooms'] ?> bedrooms <?= $house['nr_bathrooms'] ?> bathrooms </p>
        </div>

      </div>
        <div id="owner">
          <img src="<?= getThumbnailLink(get_owner_name($house['hab_id']))?>" alt="Profile Picture">
          <p><?= get_owner_name($house['hab_id'])?></p>
        </div>

    </div>
      
      <div class="texthouse">
        <p> <?= $house['description'] ?> </p>
      </div>
          
    </div>

    <div id="right">

    <div id="map">
  <script>
  function initMap() {
    let uluru = {lat: -25.344, lng: 131.036};
    let map = new google.maps.Map(document.getElementById('map'), {zoom: 12, center: uluru});
    
    let geocoder = new google.maps.Geocoder();
    let address = "<?= join(", ", array($house['addr'], $house['location'])); ?>";
    geocoder.geocode({'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        let marker = new google.maps.Marker({map: map, position: results[0].geometry.location});
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    })
  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl2GT4Y7CuGySfw2qaA4gDisQ2B56g61E&callback=initMap">
  </script>
</div>

    <div class="book">
      <?php 
            $diff = abs(strtotime($checkout)-strtotime($checkin));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $nights = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            $per_day = $house['price_per_day'];
            $total = $per_day  * $nights?>

<?php
if ($nights > 0){ ?>
      <h2>Nights: <?=$nights?> * <?= $house['price_per_day'] ?> €</h2>
      <h3>Total:  <?= $total ?> € </h3>
      <a href="reservation.php?id=<?= $house_id ?>&checkin=<?= $checkin ?>&checkout=<?= $checkout ?>&guests=<?= $guests ?>">Book Now</a>
<?php } else{?>
  <h3>Price per day: <?= $house['price_per_day'] ?> €</h2>
  <a href="reservation.php?id=<?= $house_id ?>&checkin=<?= $checkin ?>&checkout=<?= $checkout ?>&guests=<?= $guests ?>">Book Now</a>
<?php } ?>
    
    </div>
    </div>

      
    </div>

    <?php } ?>
