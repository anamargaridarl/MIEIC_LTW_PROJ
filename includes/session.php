<?php 
    session_set_cookie_params(0,null,null,true,true);//lifetime is 600, secure connection = true, httponly = true
    session_start();
    session_regenerate_id(true);
?>