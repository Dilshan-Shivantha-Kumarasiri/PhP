<?php

    session_start();
    echo $_SESSION['email'];
    include('./function.php');
    ensure_user_is_authenticated();


?>
