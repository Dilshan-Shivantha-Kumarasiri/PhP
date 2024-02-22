<?php

    $name = null;

    function sum($a, $b)
    {
        return $a + $b;
    }

    echo sum(5, 5), "<br/>";

    //default parameters
    function defaultFunction($name = "Dilshan")
    {
        echo $name, "<br/>";
    }

    defaultFunction();
    defaultFunction("Shivantha");

    // global variable
    $current_position = "SE";
    function printCurrentPosition()
    {
        global $current_position, $name; // can we have multiple global variables like that
        echo $current_position, "<br/>";
    }

    printCurrentPosition();





?>
