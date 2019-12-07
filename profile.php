<?php
    include_once('database/users.php');
    include_once('includes/session.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/nav_bar.php');
    include_once('templates/profile_sidemenu.php');


    // Uncomment in production
    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("css/navfooter.css", "css/profile.css" ,"css/profile_sidemenu.css"), array());
    drawNavBar();
    // drawProfile();
?>

<section class="container">
    
<?php drawSideMenu() ?>

    <section class="profile-info">
        <section class="profile-image">
            <img src="images/profile_pic_resize.jpg" alt="profile picture">
            <p><?= $_SESSION['username'] ?></p>
        </section>
        <form>
            <label for="username">Name</label>
            <input type="text" name="username">
            <label for="email">Email</label>
            <input type="text" name="email">
            <input type="submit" name="submit" value="Update profile">
        </form>
    </section>
</section>

<?php drawFooter(); ?>
