<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/list_rooms.php');
    include_once('templates/nav_bar.php');

    drawHead(array("css/rooms.css", "css/navfooter.css"), array('modalBox.js'));?>

    <div id= "page">
    
    <div id ="pagelessfooter">
    <?php drawNavBar();

    $houses = getRoomsByRegion($_GET['region']);
    
    drawRooms($houses);?>

    </div>
    
    <?php drawFooter(); ?>

    </div>
?>
