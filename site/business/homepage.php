<?php
require_once "dao/sanpham.php";

require_once "dao/slide.php";
function home()
{
    $products = loadall_sanpham();
    // dd($products);
    $slides = slide_select_show();
    // var_dump($slide);
    // die;
    client_render("homepage/index.php", compact('products', 'slides'));  //compact('data') = ['$data' => $data] : tức là bó lại


}

require_once "dao/danhmuc.php";
require_once "dao/danhmuc.php";
function home_k(){
    $products = loadall_sanpham();
    $categories = loadall_danhmuc();
    // dd($categories);
    client_render("homepage/index.php", compact('products','categories'));  //compact('data') = ['$data' => $data] : tức là bó lại
}

