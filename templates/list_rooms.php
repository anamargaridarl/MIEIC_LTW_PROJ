<?php
    function drawRooms($houses, $checkin, $checkout, $guests, $nights) {
        foreach ($houses as $house): 
        $images = getImages($house['hab_id'])?>
        <section class="house">
            <img src=<?= $images[0]['link'] ?> alt="House Photo" width="300" height=200>
            <section class="right">
            <section class="house_description">
            <a href="houses_page.php?id=<?= $house['hab_id'] ?>&checkin=<?=$checkin?>&checkout=<?=$checkout?>&guests=<?= $guests ?>&nights=<?= $nights ?>"> <?= $house['title'] ?> </a>
                <p><?= $house['description'] ?></p>
            </section>
            <section class="house_price">
                <p><?= $house['price_per_day']?>€/day</p>
                <a href="houses_page.php?id=<?= $house['hab_id'] ?>&checkin=<?=$checkin?>&checkout=<?=$checkout?>&guests=<?= $guests ?>&nights=<?= $nights ?>">Check availability</a>
            </section>
            </section>
        </section>
        <?php endforeach;
    } 
?>