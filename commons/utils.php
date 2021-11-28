<?php

function dd(){
    $data = func_get_args();
    echo "<pre>";
    foreach($data as $item){
        var_dump($item);
    }
    echo "</pre>";
    die;
}
function client_render($view, $data){
    extract($data);
    $view = './site/view/' . $view; 
    include_once "./site/view/layouts/main.php";
}
function exist_param($fieldname){
    return array_key_exists($fieldname,$_REQUEST);
}