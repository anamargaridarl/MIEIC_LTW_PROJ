<?php
    include_once('database/users.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/nav_bar.php');

    // Uncomment in production
    // if (!isset($_SESSION['username'])) {
    //     die(header('Location: /index.php'));
    // }

    drawHead(array("css/navfooter.css", "css/profile.css"), array());
    drawNavBar();
    // drawProfile();
?>

<section class="container">
    <nav class="side-menu">
        <a id="reservations" href="">Reservations</a>
        <a id="info" href="">Info</a>
        <a id="houses" href="">Houses</a>
    </nav>
    
    <section class="profile-info">
        <section class="profile-image">
            <img src="images/profile_pic_resize.jpg" alt="profile picture">
            <p>Person Name</p>
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
