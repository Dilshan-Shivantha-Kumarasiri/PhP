<?php

require('./app/app.php');
$values = getTerms();

if (!isset($_GET['term'])){
    redirect("index.php");
}

$data = getTerm($_GET['term']); //todo : validation for user input
if (!$data){
    view('not_found');
    die();
}

$term = $data->term;
$view_bag['title'] = "Details for $term ";

view('details', $data);

?>
