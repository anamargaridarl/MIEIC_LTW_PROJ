<?php 
    $currParams = session_get_cookie_params();
    session_set_cookie_params(0,$currParams['path'],$currParams['domain'],false,true);//lifetime is indefinite, secure connection = true (false until https is obtained), httponly = true
    session_start();
    if(!isset($_SESSION['csrf'])) {
        $_SESSION['csrf'] = generate_random_token();
    }
    
    session_regenerate_id(true);

    function generate_random_token() {
        return bin2hex(openssl_random_pseudo_bytes(32));
    }
?>