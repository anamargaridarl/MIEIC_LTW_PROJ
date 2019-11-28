<?php
    $db = new PDO('sqlite:database/database.db');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo $db == null;
?>