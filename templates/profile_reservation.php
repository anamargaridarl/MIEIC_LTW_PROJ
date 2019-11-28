<!DOCTYPE html>
<html>

<head>
  <title>Houses Of The World!</title>
  <script defer src="carrosel.js" type="module"></script>
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/profilereservation.css" rel="stylesheet">
  <link href="css/navfooter.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
  <?php
include 'templates/navBar.php';
?>
<h1>Reservations</h1>

<div class="reservation">
<div class="img">
<img src="https://picsum.photos/300/200" alt="House Photo" width="250em" height="150em">
</div>

<div class="text">
  <p>Title</p>
  <p>Local</p>
  <p>Number Nights: 2 </p>
  <p>Total: 256€</p>
</div>
</div>

  <?php
include 'templates/footer.php';
?>

</body>

</html>