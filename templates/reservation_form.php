<?php 
    include_once('../database/getters.php');
    include_once('../includes/session.php');

    function drawReservationForm($house_id, $checkin, $checkout, $guests) { 
        $house = getRoom($house_id);    
        $diff = abs(strtotime($checkout)-strtotime($checkin));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $nights = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
?>
    <section class="reservation">
        <section class="box">
            <div id="header">
                <h1>Summary</h1>
            </div>
            <p><?= htmlspecialchars($house['title']) ?></p>
            <p><?= htmlspecialchars($house['location']) ?></p>
            <section id="reservation-info">
            <?php if ($guests == 1) { ?>
                <p><?= $guests ?> Guest</p>
            <?php } else { ?>
                <p><?= $guests ?> Guests</p>
            <?php } ?>

            <?php if ($nights == 1) { ?>
                <p><?= $nights ?> Night</p>
            <?php } else { ?>
                <p><?= $nights ?> Nights</p>
            <?php } ?>
                <p id="total">Total: <?= $house['price_per_day'] * $nights ?> &#8364</p>
            </section>
        </section>
        <form id="regForm" action="../actions/action_reservation.php" method="POST">
            <input type="number" value="<?= $house_id ?>" name="house_id" class="invisible">
            <input type="number" value="<?= $guests ?>" name="guests" class="invisible">
            <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">

            
            <div class="tab">
                <h1>Confirm Dates</h1>
                <label for="checkin">Checkin Date: </label>
                <input type="date" value="<?= $checkin ?>" name="checkin">
                
                <label for="checkout">Checkout Date: </label>
                <input type="date" value="<?= $checkout ?>" name="checkout">
            </div>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h1>Guest Info</h1>
               <?php for ($guest = 1; $guest <= $guests; $guest++) { ?>
                    <p>Guest <?=$guest?> Name: <input placeholder="First name..." oninput="this.className = ''"></p>
                <?php } ?>
                
                <p>Contact Information<input placeholder="E-mail..." oninput="this.className = ''" value="<?= $_SESSION['email'] ?>"></p>
                <p>Phone Number<input placeholder="Phone..." oninput="this.className = ''"></p>
            </div>
            
            <div class="tab">
            <h1>Payment</h1>
                <p>Credit Card Number <input type='number'></p>
                <p>CCV <input type="password"></p>
            </div>
            
            <div style="overflow:auto;">
                <div id="buttons" style="float:right;">
                    <button type="button" id="prevBtn">Previous</button>
                    <button type="button" id="nextBtn">Next</button>
                </div>
            </div>
            
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
            </div>
            
        </form>
    </section> 
<?php } ?>