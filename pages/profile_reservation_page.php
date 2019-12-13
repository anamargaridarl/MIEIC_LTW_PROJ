<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_reservation.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        http_response_code(401);
        die(header('Location: /index.php'));
    }


    drawHead(array("../css/profilereservation.css", "../css/profile_sidemenu.css", "../css/navfooter.css"), array('../modal_box.js'));
    ?>


    <?php drawNavBar();?>
  
    <div class="middle">
    
    <?php drawSideMenu();

    $id = get_userid($_SESSION['username']);

    $reservations = getReservations($id); 

    drawReservations($reservations);?>

    </div>
    
    <?php drawFooter(); ?>

   
