<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/profile_house.php');
    include_once('templates/nav_bar.php');

    drawHead(array("css/profilehouse.css", "css/navfooter.css"), array('modalBox.js'));

    drawNavBar();

    $houses = get_owner_houses(3); 

    drawHouses($houses);
    
    drawFooter();
?>
