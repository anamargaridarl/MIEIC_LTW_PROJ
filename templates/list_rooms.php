<?php
    function drawRooms($houses, $checkin, $checkout, $guests) {
       
        if(empty($houses)) {?>
        <h4> No matchs found. It's just not in Tinder afterall... </h4>

        <?php }
        else{
       
        foreach ($houses as $house): 
        $images = getImages($house['hab_id'])?>
        <section class="house">
            <img src=<?= "../images/houses/" . urlencode($images[0]['link']) ?> alt="House Photo" width="300" height=200>
            <section class="right">
            <section class="house_description">
            <a href="houses_page.php?id=<?= urlencode($house['hab_id']) ?>&checkin=<?=urlencode($checkin)?>&checkout=<?=urlencode($checkout)?>&guests=<?= $guests ?>"> <?= htmlspecialchars($house['title']) ?> </a>
                <p><?= htmlspecialchars($house['description']) ?></p>
            </section>
            <section class="house_price">
                <p><?= htmlspecialchars($house['price_per_day'])?>€/day</p>
                <a href="houses_page.php?id=<?= urlencode($house['hab_id'])?>&checkin=<?=urlencode($checkin)?>&checkout=<?= urlencode($checkout)?>&guests=<?= $guests ?>"">Check availability</a>
            </section>
            </section>
        </section>
        <?php endforeach;
    } 

}
?>