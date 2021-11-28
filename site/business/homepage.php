<?php
require_once "dao/sanpham.php";
require_once "dao/slide.php";
function home(){
    $products = loadall_sanpham();
    // dd($products);
    $slide = slide_select_show();
    // var_dump($slide);
    // die;
    client_render("homepage/index.php", compact('products','slide'));  //compact('data') = ['$data' => $data] : tức là bó lại
    
    
}
