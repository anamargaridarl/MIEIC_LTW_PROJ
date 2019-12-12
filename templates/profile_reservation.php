
  <?php

  function drawReservations($reservations) { ?>

<div class="res_page">
<h1>Reservations</h1>

 <?php foreach ($reservations as $reservation): 
  $images = getImages($reservation['hab']);?>

<div class="reservation">
<div class="img">
<img src=<?=urlencode($images[0]['link'])?> alt="House Photo" width="250em" height="150em">
</div>

<div class="text">
  <p><?= $reservation['title'] ?></p>
  <p><?= $reservation['location'] ?></p>
  <p>Nº. Guests: <?= $reservation['nr_guests'] ?></p>
  <p>Dates: <?= $reservation['start_date'] ?> - <?= $reservation['end_date'] ?>  </p>
  <p>Total: <?= $reservation['price_per_day'] ?> € </p>
</div>
</div>


<?php endforeach ?>
</div>
 <?php } ?>