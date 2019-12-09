<?php
function drawHouseProfile($house,$id,$reservations) { 
$images = getImages($id); ?>
    
    <div id= "h_info">
    <h1><?= $house['title'] ?></h1>

    <div id= "h_info_all">

    <div id= "h_image">
    <img src=<?= $images[0]['link'] ?> alt="House Photo" width="300" height=200>
    </div>
     
    <div id= "h_text">
    <p> <?= $house['region'] ?> , <?= $house['location'] ?></p>
    <p> Address: <?= $house['addr'] ?> </p>
    <p> Capacity: <?= $house['capacity'] ?>  Nº.Bedrooms: <?= $house['nr_rooms'] ?> Nº.bathrooms: <?= $house['nr_bathrooms'] ?>   </p>
    <p> Price per day: <?= $house['price_per_day'] ?> €/night </p>
    <p> Description:</p>
    <p>  <?= $house['description'] ?> </p>

    <a id="editinfo" href="">Edit Info</a>
    </div>
    </div>


    <h2> Reservation History </h2>

    <div id="reservlist">
   <?php foreach ($reservations as $reservation): ?>
    <div id="reserv">
    <p>Main Guest:   </p>
    <p>Nº.Guests: <?= $reservation['nr_guests'] ?> </p>
    <p>Dates: <?= $reservation['start_date'] ?> - <?= $reservation['end_date'] ?> </p>
    <p>Total: <?= $reservation['price_per_day'] ?>*<?= $reservation['end_date'] -  $reservation['start_date']  ?> €</p>
    </div>
    <?php endforeach ?>
    </div>


 <?php } ?>