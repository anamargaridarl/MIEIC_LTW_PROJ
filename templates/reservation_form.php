<?php 
    include_once('../database/getters.php');
    include_once('../includes/session.php');

    function drawReservationForm($house_id, $checkin, $checkout) { 
        $house = getRoom($house_id);    
?>
    <section class="reservation">
        <section class="box">
            <div id="header">
                <h1>Summary</h1>
            </div>
            <p><?= $house['title'] ?></p>
            <p><?= $house['location'] ?></p>
            <section id="reservation-info">
                <p>Guest No</p>
                <p>Night No</p>
                <p id="total">Total: </p>
            </section>
        </section>
        <form id="regForm" action="">
            <!-- One "tab" for each step in the form: -->
            <!-- Display as many inputs as guests -->
            <div class="tab">Guest Info:
                <p>Guest 1 Name: <input placeholder="First name..." oninput="this.className = ''"></p>
                
                <p>Contact Information<input placeholder="E-mail..." oninput="this.className = ''" value="<?= $_SESSION['email'] ?>"></p>
                <p><input placeholder="Phone..." oninput="this.className = ''"></p>
            </div>
            
            <div class="tab">Payment:
                <p>Credit Card Number: <input type='number'></p>
                <p>CCV: <input type="password"></p>
            </div>
            
            <div style="overflow:auto;">
                <div style="float:right;">
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