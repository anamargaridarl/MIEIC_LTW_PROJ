<?php
  function drawModal() {
?>

  <section id="modalSignup">
    <form method="post" action="../actions/action_signup.php">
      <div id="signup">
        <p id="signTitle">Sign Up</p>
        <div id="username">
          <p>Name</p>
          <input type="text" name="username" placeholder="Enter your Username..." required>
        </div>
        <div id="email">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter a valid email..." required>
        </div>
        <div id="password">
          <p>Password</p>
          <input id="sgnup_pass" type="password" name="password" placeholder="Enter a valid password..." required>
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