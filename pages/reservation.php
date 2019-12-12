<?php
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    drawHead(array("../css/navfooter.css", "../css/reservation.css"), array("../modal_box.js", "../reservations.js"));
    drawNavBar();
?>

    <section class="reservation">
        <section class="box">
            <div id="header">
                <h1>Summary</h1>
            </div>
            <p>House Name</p>
            <p>House Location</p>
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
                
                <p>Contact Information<input placeholder="E-mail..." oninput="this.className = ''"></p>
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

<?php drawFooter(); ?>
