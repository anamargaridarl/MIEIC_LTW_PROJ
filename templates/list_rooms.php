<?php
    include_once('../database/rooms.php');
    $houses = getRooms();
?>

<head>
    <link href="../css/rooms.css" rel="stylesheet">
</head>

<?php foreach ($houses as $house): ?>
<section class="house">
    <img src="https://picsum.photos/300/200" alt="House Photo" width="300" height=200>
    <section class="house_description">

    <?php
    $product_id = $house['hab_id'];
    ?>
        <a href="houses.php?id=<?php echo $product_id; ?>"> <?= $house['title'] ?> </a>
        <p><?= $house['description'] ?></p>
    </section>

    <section class="house_price">
        <p><?= $house['price_per_day']?>€/day</p>
        <a href="">Check availability</a>
    </section>
</section>
<?php endforeach ?>
