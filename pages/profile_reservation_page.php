<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_reservation.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }


    drawHead(array("../css/profilereservation.css", "../css/profile_sidemenu.css", "../css/navfooter.css"), array('modal_box.js'));
    ?>


    <?php drawNavBar();?>
  
    <div class="middle">
    
    <?php drawSideMenu();

    //$reservations = getReservations(6); 

    //drawReservations($reservations);?>

    </div>
    
    <?php drawFooter(); ?>

   
