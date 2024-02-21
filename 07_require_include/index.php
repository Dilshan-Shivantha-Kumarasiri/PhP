<?php
    $title = "include and require"."<br/>";
    echo "index : ",$title;
    include('./../07_require_include/inc/header.php');
    include('./../07_require_include/inc/footer.php');
    require_once('./inc/functions.php');
    require_once('./inc/navigation.php');
    function getName(){
        return "Shivnatha";
    }

    echo setName();
    navigation();






?>
