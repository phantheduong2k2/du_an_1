<?php
require_once "commons/utils.php";
require_once "dao/sanpham.php";

function category(){
    if(isset($_GET['ma_loai'])){
        extract($_REQUEST);
        $products = san_pham_select_by_loai($ma_loai);
    client_render("category/index.php", compact('products'));
    }
}

?>