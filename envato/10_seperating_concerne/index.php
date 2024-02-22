<?php

require('./app/app.php');

$view_bag['title'] = 'Glossary';
$items = "ddd";
if (isset($_GET['search'])){
   $items = search_term($_GET['search']);
    $view_bag['title'] = 'searching the '.$_GET['search'];
}else{
    $items = getTerms();
}
view('index', $items);