<?php
    function drawRooms($houses) {
        foreach ($houses as $house): ?>
        <section class="house">
            <img src="https://picsum.photos/300/200" alt="House Photo" width="300" height=200>
            <section class="house_description">
                <h1><?= $house['title'] ?></h1>
                <p><?= $house['description'] ?></p>
            </section>

            <section class="house_price">
                <p><?= $house['price_per_day']?>€/day</p>
                <a href="">Check availability</a>
            </section>
        </section>
        <?php endforeach;
    } 
?>

