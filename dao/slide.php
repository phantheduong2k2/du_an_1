<?php
require_once 'pdo.php';
function slide_select_all(){
    $sql = "SELECT * FROM slide";
        return pdo_query($sql);
}
function slide_select_show(){
    $sql = "SELECT * FROM slide order by ngay_them desc limit 0,3";
    return pdo_query($sql);
}

function slide_delete($ma_slide){
    $sql = "DELETE FROM slide WHERE ma_slide = ?";
        pdo_execute($sql, $ma_slide);
}
function slide_insert($ma_slide, $tieu_de, $noi_dung, $duong_dan, $hinh_anh){
    $sql = "INSERT INTO slide(ma_slide,tieu_de,noi_dung,duong_dan,hinh_anh) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$ma_slide, $tieu_de, $noi_dung, $duong_dan, $hinh_anh);
}
// slideshow
