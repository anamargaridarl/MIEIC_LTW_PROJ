<?php
function drawHouseProfile($house,$id,$reservations) { 
$images = getImages($id); ?>
    
    <div id= "h_info">
    <h1><?= htmlspecialchars($house['title']) ?></h1>

    <div id= "h_info_all">

    <div id= "h_image">
    <img src=<?= urlencode($images[0]['link']) ?> alt="House Photo" width="300" height=200>
    </div>
     
    <div id= "h_text">
    <p> <?= htmlspecialchars($house['region']) ?> , <?= htmlspecialchars($house['location']) ?></p>
    <p> Address: <?= htmlspecialchars($house['addr']) ?> </p>
    <p> Capacity: <?= $house['capacity'] ?>  Nº.Bedrooms: <?= $house['nr_rooms'] ?> Nº.bathrooms: <?= $house['nr_bathrooms'] ?>   </p>
    <p> Price per day: <?= $house['price_per_day'] ?> €/night </p>
    <p> Description:</p>
    <p>  <?= htmlspecialchars($house['description']) ?> </p>
    <div id= "h_button">
    <a id="editinfo" href="../pages/house_info_edit_page.php?id=<?=$id?>">Edit Info</a>
    </div>
    </div>
    </div>


    <h2> Reservation History </h2>

    <div id="reservlist">
   <?php foreach ($reservations as $reservation): 
      $guest = getClientName($reservation['client']);?>
    <div id="reserv">
    <p>Main Guest: <?=$guest?></p>
    <p>Nº.Guests: <?= $reservation['nr_guests'] ?> </p>
    <p>Dates: <?= $reservation['start_date'] ?> - <?= $reservation['end_date'] ?> </p>

    <?php $per_day = $reservation['price_per_day'];
          $days =  $reservation['dif'];
          $total = $per_day * $days;?>
    <p>Total: <?= $total ?> €</p>
    </div>
    <?php endforeach ?>
    </div>


 <?php } ?>