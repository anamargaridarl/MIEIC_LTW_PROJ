<!DOCTYPE html>
<html>

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
  <div class="information">

  <h1>Main Title</h1>
  <h2>Location</h2>
  <p> Number divisions</p>

  </div>

<div class="texthouse">
<p> Text about House </p>
</div>

<div class="owner">
<img src="images/profile_pic_resize.jpg" alt="Profile Picture">
  <p>Joana</p>
</div>

<div class="book">
  <h1>Total number<h1>
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