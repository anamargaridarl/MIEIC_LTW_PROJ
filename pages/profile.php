<?php
    include_once('../database/users.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/show_messages.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        http_response_code(401);
        die(header('Location: ../index.php'));
    }

    drawHead(array("../css/navfooter.css", "../css/profile.css" ,"../css/profile_sidemenu.css"), array());
    showMessages();
    drawNavBar(false);
    
?>

<section class="container">
    
<div class="middle">

<?php drawSideMenu() ?>

    <section class="profile-info">
        <section class="profile-image">
            <img src="<?=getProfileAvatarLink($_SESSION['username'])?>" alt="profile picture">
            <p><?= htmlspecialchars($_SESSION['username']) ?></p>
            <form id="upload_avatar" method="post" action="../actions/action_update_avatar.php" enctype="multipart/form-data">
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" required>
                <input type="submit" value="Upload avatar">
            </form>
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
            
            <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
            <input type="submit" name="submit" value="Update profile">

        </form>
    </section>

</div>
<?php drawFooter(); ?>
