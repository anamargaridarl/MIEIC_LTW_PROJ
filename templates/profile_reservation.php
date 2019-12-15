
  <?php

  function drawReservations($reservations) { ?>

<div class="res_page">
<h1>Reservations</h1>

<?php if(empty($reservations)) {?>


<p> No reservations associated to this account yet </p>

  <?php } else {

 foreach ($reservations as $reservation): 
  $images = getImages($reservation['hab']);?>

<div class="reservation">
<div class="img">
<img src=<?= "../images/houses/" . urlencode($images[0]['link'])?> alt="House Photo" width="250em" height="150em">
</div>

<div class="text">
  <a href="houses_page.php?id=<?= urlencode($reservation['hab']) ?>" ><?= htmlspecialchars($reservation['title']) ?> </a>
  <p><?= $reservation['location'] ?></p>
  <p>Nº. Guests: <?= $reservation['nr_guests'] ?></p>
  <p>Dates: <?= $reservation['start_date'] ?> - <?= $reservation['end_date'] ?>  </p>
  <p>Total: <?= $reservation['price_per_day'] ?> € </p>
</div>
</div>


<?php endforeach ?>
</div>


 <?php }
 } ?>