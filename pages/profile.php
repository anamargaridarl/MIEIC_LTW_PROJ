<?php
    include_once('../database/users.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');


    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("../css/navfooter.css", "../css/profile.css" ,"../css/profile_sidemenu.css"), array('../search.js'));
    drawNavBar();
    // drawProfile();
?>

<section class="container">
    
<?php drawSideMenu() ?>

    <section class="profile-info">
        <section class="profile-image">
            <img src="../images/profile_pic_resize.jpg" alt="profile picture">
            <p><?= $_SESSION['username'] ?></p>
        </section>
        <form method="post" action="../actions/action_update_profile.php">
            <label for="username">Name</label>
            <input type="text" name="username" value="<?= $_SESSION['username'] ?>">

            <label for="email">Email</label>
            <input type="text" name="email" value="<?= $_SESSION['email'] ?>">

            <label for="oldpassfield">Old Password</label>
            <input type="password" name="oldpassfield">

            <label for="newpassfield">Password</label>
            <input type="password" name="newpassfield">

            <input type="submit" name="submit" value="Update profile">
        </form>
    </section>
</section>

<?php drawFooter(); ?>
