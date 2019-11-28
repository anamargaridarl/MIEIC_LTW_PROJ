<?php
  function drawModal() {
?>

  <section id="modalSignup">
    <div id="signup">
      <p id="signTitle">Sign Up</p>
      <div id="username">
        <p>Name</p>
        <input type="text" name="username" placeholder="Enter your Username...">
      </div>
      <div id="email">
        <p>Email</p>
        <input type="text" name="email" placeholder="Enter a valid email...">
      </div>
      <div id="password">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter a valid password...">
      </div>
      <div id="register">
        <input type="submit" value="Register">
      </div>
    </div>
  </section>
  <section id="modalLogin">
    <div id="login">
      <p id="loginTitle">Sign In</p>
      <div id="email">
        <p>Email</p>
        <input type="text" name="email" placeholder="Enter your email account...">
      </div>
      <div id="password">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter your password...">
      </div>
      <div id="log">
        <input type="submit" value="Login">
      </div>
    </div>
  </section>
<?php } ?>