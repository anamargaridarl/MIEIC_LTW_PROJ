<?php
  function drawModal() {
?>

  <section id="modalSignup">
    <form method="post" action="../actions/action_signup.php">
      <div id="signup">
        <p id="signTitle">Sign Up</p>
        <div id="username">
          <p>Name</p>
          <input type="text" name="username" placeholder="Enter your Username..." pattern="\b(?!admin)\b\S+" title="Pickup a good username for yourself. Just a reminder, admin is not available..." required>
        </div>
        <div id="email">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter a valid email..." title="Make sure you enter the correct email. Nobody else needs to know where you're going..." required>
        </div>
        <div id="password">
          <p>Password</p>
          <input id="sgnup_pass" type="password" name="password" placeholder="Enter a valid password..." title="In order to be extra-safe choose a good password. It should be of a minimum of 12-14 characters long, containing lower and upper case letters, numbers and some symbols."  required>
        </div>
        <div id="passwordshow">
          <p>Show Password:</p>
          <input type="checkbox" id="show_sgn">
        </div>
        <div id="register">
          <input type="submit" value="Register">
        </div>
      </div>
    </form>
  </section>
  <section id="modalLogin">
    <form method="post" action="../actions/action_login.php">
      <div id="login">
        <p id="loginTitle">Sign In</p>
        <div id="email">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter your email account..." required>
        </div>
        <div id="password">
          <p>Password</p>
          <input id="login_pass" type="password" name="password" placeholder="Enter your password..." required>
        </div>
        <div id="passwordshow">
          <p>Show Password:</p>
          <input type="checkbox" id="show_lgn">
        </div>
        <div id="log">
          <input type="submit" value="Login">
        </div>
      </div>
    </form>
  </section>
<?php } ?>