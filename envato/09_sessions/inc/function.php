
<?php

    function authenticateUser($userName , $password){
        return (USER_NAME == $userName && PASSWORD == $password);
    }

    function redirect($url){
        header("location:$url");
    }

    function is_user_authenticated(){
        return isset($_SESSION['email']);
    }

    function ensure_user_is_authenticated(){
        if (!is_user_authenticated()){
            redirect("../index.php");
            die();
        }
    }



?>


