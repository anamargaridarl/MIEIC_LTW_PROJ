<?php
    include_once('database/rooms.php');
    $houses = getRooms();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rooms</title>
    <!-- <link href="css/homepage.css" rel="stylesheet"> -->
    <meta charset="utf-8">
</head>

<body>
    <nav>
        <input type="search" id="search_bar">
        <p>Guests</p>
        <img src="" alt="Profile Picture">
        <p>User</p>
    </nav>

    <?php foreach ($houses as $house): ?>
    <section>
        <article>
            <h1><?= $house['title'] ?></h1>
            <p><?= $house['description'] ?></p>
            <img src="" alt="House Photo">
            <p><?= $house['price_per_day']?>€/day</p>
            <button>Check availability</button> <!-- This will probably be a link not a button-->
        </article>
    </section>
    <?php endforeach ?>

</body>
</html>
