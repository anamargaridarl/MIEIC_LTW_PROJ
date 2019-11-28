<!DOCTYPE html>
<html>

<?php
    include_once('database/rooms.php');
    if(isset($_GET['id'])){
      $product_id = $_GET['id'];
      echo $product_id;
    } else {
      echo "failed";
    }
    $houses = getRoom($product_id);
?>

<head>
  <title>Houses Of The World!</title>
  <script defer src="carrosel.js" type="module"></script>
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/houses.css" rel="stylesheet">
  <link href="css/navfooter.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
  <?php
include 'templates/navBar.php';

?>
  <div class="slideshow-container">
    <a class="prev" >&#10094;</a>

  <div id="Images">
    <div class="mySlides">
      <img src="images/minimal_kitchen.jpg" >
    </div>

    <div class="mySlides">
      <img src="images/fancy_living_room.jpg" >
    </div>

    <div class="mySlides">
      <img src="images/spacey_living_room.jpg" >
    </div>
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
<img src="images/profile_pic_resize.jpg" alt="Profile Picture">
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


  <?php
include 'templates/footer.php';
?>

</body>

</html>