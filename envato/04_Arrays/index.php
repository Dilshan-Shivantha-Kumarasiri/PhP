<?php
/*
    $guitars = "Vela";
    $guitars = "Explorer";
*/

/*
    $guitars = array('vela','Explorer','Strat');
    //$guitars = 5;
    print_r($guitars);

    if (isset($guitars[0])){
        echo "guitar is an set";
    }else{
        echo "guitar is not an set";
    }
*/
    // associative array
    // in associative array we can store key value pairs

    $guitars = [
        "owner" => "Dilshan",
        "cashier" => "Nilusha",
        "so" => "Amal",
        "" => "Amal",
        "" => "Amal", // can not have dupliicate values
    ];

    print_r($guitars);
    if (isset($guitars[""])){
        echo "guitar is an exists";
    }else{
        echo "guitar is not exists";
    }

?>
