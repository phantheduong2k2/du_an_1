<?php
require_once "pdo.php";

function khach_hang_insert($ma_kh, $ten_kh, $email, $mat_khau, $hinh, $gioi_tinh, $kich_hoat){
    $sql = "INSERT INTO khach_hang(ma_kh,ten_kh,email,mat_khau,hinh,gioi_tinh,kich_hoat) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_kh, $ten_kh, $email, $mat_khau, $hinh, $gioi_tinh==1, $kich_hoat==1);
}
function khach_hang_update($ma_kh, $ten_kh, $email, $mat_khau, $hinh, $gioi_tinh, $kich_hoat){
    $sql = "UPDATE khach_hang SET ten_kh=?,email=?,mat_khau=?,hinh=?,gioi_tinh=?,kich_hoat=? WHERE ma_kh=?";
    pdo_execute($sql, $ten_kh,$email,$mat_khau,$hinh,$gioi_tinh==1,$kich_hoat==1, $ma_kh);
}
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql); 
}