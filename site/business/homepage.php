<?php
require_once "dao/sanpham.php";
function home(){
    $products = loadall_sanpham();
    // dd($products);
    client_render("homepage/index.php", compact('products'));  //compact('data') = ['$data' => $data] : tức là bó lại
    
}