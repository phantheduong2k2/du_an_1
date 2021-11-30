<?php
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
function home(){
    $products = loadall_sanpham();
    $categories = loadall_danhmuc();
    // dd($categories);
    client_render("homepage/index.php", compact('products','categories'));  //compact('data') = ['$data' => $data] : tức là bó lại
}

