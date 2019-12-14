<?php 
function showMessages() {
  
  if(isset($_SESSION['message']) && $_SESSION['message']['type'] == 'error') {?>
    <div class="error_msg">
      <p id="message"><?=$_SESSION['message']['content']?></p>
      <span id="close_msg" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
  <?php }
  if(isset($_SESSION['message']) && $_SESSION['message']['type'] == 'success') {?>
    <div class="success_msg">
      <p id="message"><?=$_SESSION['message']['content']?></p>
      <span id="close_msg" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
  <?php }
  unset($_SESSION['message']);
}
?>