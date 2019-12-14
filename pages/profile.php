<?php
    include_once('../database/users.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/show_messages.php');
    include_once('../templates/profile_sidemenu.php');

<<<<<<< HEAD

=======
>>>>>>> 7d75941661bb071644c8f27b26527047048a657f
    if (!isset($_SESSION['email'])) {
        http_response_code(401);
        die(header('Location: ../index.php'));
    }

    drawHead(array("../css/navfooter.css", "../css/profile.css" ,"../css/profile_sidemenu.css"), array('../search.js'));
    showMessages();

    drawNavBar();
?>

<section class="container">
    
<div class="middle">

<?php drawSideMenu() ?>

    <section class="profile-info">
        <section class="profile-image">
            <img src="../images/profile_pic_resize.jpg" alt="profile picture">
            <p><?= htmlspecialchars($_SESSION['username']) ?></p>
        </section>
        <form method="post" action="../actions/action_update_profile.php">
            <label for="username">Name</label>
            <input type="text" name="username" value="<?= htmlspecialchars($_SESSION['username']) ?>" title="This name is the one displayed to other users." required>

            <label for="email">Email</label>
            <input type="text" name="email" value="<?= htmlspecialchars($_SESSION['email']) ?>" title="Set the email for your account. You won't get spam from us, don't worry..." required>

            <label for="currpass">Password</label>
            <input type="password" name="currpass" title="Any changes to the profile require for you to enter your password..." required>

            <label for="newpassfield">New Password</label>
            <input type="password" name="newpassfield" title="Change your password if you wish, but put your current one before that, in case you forget to signout somewhere...">

            <input type="submit" name="submit" value="Update profile">

        </form>
    </section>

</div>
<?php drawFooter(); ?>
