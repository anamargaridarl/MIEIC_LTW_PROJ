<?php
function drawHouseProfile($house,$reservations) { 
$images = getImages($house['hab_id']); ?>
    <h1><?= $house['title'] ?></h1>

    <img src=<?= $images[0]['link'] ?> alt="House Photo" width="300" height=200>
          
    <p> <?= $house['region'] ?> , <?= $house['location'] ?></p>
    <p> Address: <?= $house['address'] ?> </p>
    <p> Capacity: <?= $house['capacity'] ?>  Nº.Bedrooms: <?= $house['nr_rooms'] ?> Nº.bathrooms: <?= $house['nr_bathrooms'] ?>   </p>
    <p> Price per day: <?= $house['price_per_day'] ?> €/night </p>
    <p> Description:</p>
    <p>  <?= $house['description'] ?> </p>

    <h2> Reservation History <h2>

    <div id="Reservations">
   <?php foreach ($reservations as $reservation): ?>
    <p>Main Guest:   </p>
    <p>Nº.Guests: <?= $reservation['nr_guests'] ?> </p>
    <p>Dates: <?= $reservation['start_date'] ?> - <?= $reservation['end_date'] ?> </p>
    <p>Total: <?= $reservation['price_per_day'] ?>*<?= $reservation['end_date'] -  $reservation['start_date']  ?> €</p>
    <?php endforeach ?>



 <?php } ?>