<?php

function getTerms(){
    $json = '';
    $fName = DATA['file'];

    if (!file_exists($fName)){
        file_put_contents($fName,'');
    }else{
        $json = file_get_contents($fName);
    }

    return json_decode($json);

}

function search_term($search){
   $items = getTerms();
   return array_filter($items,function($item) use($search){

       if (strpos($item->term, $search)!==false){
           return $item;
       }
   });
}


function getTerm($term){
    $terms = getTerms();

    foreach ($terms as $item){
        if ($item->term == $term){
            return $item;
        }
    }

    return false;

}

