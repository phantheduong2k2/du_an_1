<?php
   function insert_sanpham($ten_hh,$don_gia,$giam_gia,$hinh,$mo_ta,$ngay_nhap,$dac_biet,$so_luong,$ma_loai){
    $sql="insert into hang_hoa(ten_hh,don_gia,giam_gia,hinh,mo_ta,ngay_nhap,dac_biet,so_luong,ma_loai) values('$ten_hh','$don_gia','$giam_gia','$hinh','$mo_ta','$ngay_nhap','$dac_biet','$so_luong','$ma_loai')";
    pdo_execute($sql);
   }
    function loadall_sanpham($kyw="",$ma_loai=0){
        $sql="select * from hang_hoa where 1"; 
        if($kyw!=""){
            $sql.=" and ten_hh like '%".$kyw."%'";
        }
        if($ma_loai>0){
            $sql.=" and ma_loai ='".$ma_loai."'";
        }
        $sql.=" order by ma_hh desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($ma_hh){
        $sql="delete from hang_hoa where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    function loadone_sanpham($ma_hh){
        $sql="select * from hang_hoa where ma_hh=".$ma_hh;
        $sp=pdo_query_one($sql);
        return $sp;
    }
   
    function update_sanpham($ten_hh,$don_gia,$giam_gia,$mo_ta,$ngay_nhap,$dac_biet,$so_luong,$hinh){
        
        
    }

?>