<?php 
    $currParams = session_get_cookie_params();
    session_set_cookie_params(0,$currParams['path'],$currParams['domain'],false,true);//lifetime is indefinite, secure connection = true (false until https is obtained), httponly = true
    session_start();
    session_regenerate_id(true);
?>