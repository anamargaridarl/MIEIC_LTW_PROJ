<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/profile_reservation.php');
    include_once('templates/nav_bar.php');
    include_once('templates/profile_sidemenu.php');

    // if (!isset($_SESSION['username'])) {
    //     //die(header('Location: /index.php'));
    //    //echo "<script>alert('User not logged in!')</script>";
    // }


    drawHead(array("css/profilereservation.css", "css/profile_sidemenu.css", "css/navfooter.css"), array('modalBox.js'));
    ?>


    <?php drawNavBar();?>
  
    <div class="middle">
    
    <?php drawSideMenu();

    //$reservations = getReservations(6); 

    //drawReservations($reservations);?>

    </div>
    
    <?php drawFooter(); ?>

   
