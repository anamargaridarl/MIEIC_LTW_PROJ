<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/house_info_edit.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("../css/houseinfoedit.css", "../css/profile_sidemenu.css","../css/navfooter.css"), array('modal_box.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();

    if (!isset($_SESSION['username'])) {
        http_response_code(401);
    }
    else{
       $owner_username =  $_SESSION['username'];
       $owner_id  = get_ownerid($owner_username);
    }

    if(isset($_GET['id'])){
        $house_id = $_GET['id'];
        $house = get_owner_house($owner_id,$house_id); //REPLACE WITH VARIABLE
        editHouse($house);
    }
    else
    {
        addHouse();
    }?>

    
    </div>
    <?php drawFooter(); ?>

