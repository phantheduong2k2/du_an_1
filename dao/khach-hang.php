<?php

require_once "pdo.php";
function get() {
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM khach_hang";  
    $statement = $conn->prepare($sql);   
    $statement->execute([]);
    $kq = [];
    while(true) {      
        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [          
            'ma_kh' => $rowData['ma_kh'],
            'ten_kh' => $rowData['ten_kh'],
            'email' => $rowData['email'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'ngay_sinh' => $rowData['ngay_sinh'],
            'mat_khau' => $rowData['mat_khau'],                
            'hinh' => $rowData['hinh'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'kich_hoat' => $rowData['kich_hoat'],
        ];

        array_push($kq, $row);
    }

    return $kq;
}


function khach_hang_insert($ma_kh, $ten_kh, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat){
   
    $sql="insert into khach_hang(ma_kh, ten_kh, email,  sdt , dia_chi , ngay_sinh ,mat_khau, hinh, gioi_tinh, kich_hoat) values(?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_kh, $ten_kh, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh==1, $kich_hoat==1);
}
// function khach_hang_update($ma_kh, $ten_kh, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat){
//     $sql = "UPDATE khach_hang SET  ten_kh=?,email=?,sdt=?,dia_chi=?,ngay_sinh=?, mat_khau=?,hinh=?,gioi_tinh=?,kich_hoat=?  WHERE ma_kh=?";
//     pdo_execute($sql, $ten_kh, $email, $sdt, $dia_chi , $ngay_sinh, $mat_khau, $hinh, $gioi_tinh==1, $kich_hoat==1, $ma_kh);
// }
function  khach_hang_update($ma_kh, $ten_kh, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh){
    if($hinh!="")
    $sql="UPDATE khach_hang set ten_kh='".$ten_kh."', email='".$email."',sdt='".$sdt."',dia_chi='".$dia_chi."',ngay_sinh='".$ngay_sinh."',mat_khau='".$mat_khau."',gioi_tinh='".$gioi_tinh."',hinh='".$hinh."' where ma_kh=".$ma_kh;
else 
    $sql="UPDATE khach_hang set ten_kh='".$ten_kh."', email='".$email."',sdt='".$sdt."',dia_chi='".$dia_chi."',ngay_sinh='".$ngay_sinh."',mat_khau='".$mat_khau."',gioi_tinh='".$gioi_tinh."'where ma_kh=".$ma_kh;
pdo_execute($sql);
}
function loadone_khachhang($ma_kh){
    $sql="select * from khach_hang where ma_kh=?";
    
    return pdo_query_one($sql , $ma_kh);
}
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql); 
}
function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
        pdo_execute($sql, $ma_kh);
        
}