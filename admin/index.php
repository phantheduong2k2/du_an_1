<?php
include "../dao/pdo.php";
include "../global.php";
include "../dao/danhmuc.php";
include "../dao/sanpham.php";
include "../dao/slide.php";
include "../dao/binh-luan.php";
include "../dao/thong-ke.php";
include "template/head.php";
include "template/slidebar.php";
// ------------kIÊM TRA ĐƯỜNG TRUYỀN VÀ CHẢ VỀ KẾT QUẢ-------------------------
extract($_REQUEST);
if (isset($_GET['act'])) {
     $act = $_GET['act'];
     switch ($act) {
          case 'dstaikhoan':
               include "taikhoan/dstaikhoan.php";
               break;
               //------------KẾT THÚC DANH SÁCH TÀI KHOẢN------------------------------------ 
          case 'adddanhmuc':
               //kiểm tra xem người dùng có click vào nút add hay không
               if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_loai = $_POST['ten_loai'];
                    insert_danhmuc($ten_loai);
                    $thongbao = "Thêm thành công";
               }

               include "danhmuc/add.php";
               break;
               // END THÊM DANH MỤC
          case 'listdanhmuc':
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
               // -------------END DANH SÁCH DANH MỤC 
          case 'xoadanhmuc':
               if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    delete_danhmuc($_GET['ma_loai']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
               // -----------------------END XÓA DANH MỤC 
          case 'suadanhmuc':
               if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    $dm = loadone_danhmuc($_GET['ma_loai']);
               }

               include "danhmuc/update.php";
               break;
          case 'updatedm':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    update_danhmuc($ma_loai, $ten_loai);
                    $thongbao = "Cập nhật thành công";
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
               /* controller sản phẩm */
               // ---------------------- END SỬA DANH MỤC-----------------------------------
               //------------KẾT THÚC DANH SÁCH DANH MỤC------------------------------------ 
          case 'addsanpham':
               if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ma_loai = $_POST['ma_loai'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $giam_gia = $_POST['giam_gia'];
                    $mo_ta = $_POST['mo_ta'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $dac_biet = $_POST['dac_biet'];
                    $so_luong = $_POST['so_luong'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../content/images/products/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }

                    insert_sanpham($ten_hh, $don_gia, $giam_gia, $hinh, $mo_ta, $ngay_nhap, $dac_biet, $so_luong, $ma_loai);
                    $thongbao = "Thêm thành công";
               }
               $listdanhmuc = loadall_danhmuc();
               include "hanghoa/add.php";
               break;

               // -------------END THÊM SẢN PHẨM--------------------//

          case 'listsanpham':
               if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $ma_loai = $_POST['ma_loai'];
               } else {
                    $kyw = '';
                    $ma_loai = 0;
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham($kyw, $ma_loai);
               include "hanghoa/list.php";
               break;
               // -------------------END DANH SÁCH SẢN PHẨM-------------------//

          case 'xoasp':
               if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                    delete_sanpham($_GET['ma_hh']);
               }
               $listsanpham = loadall_sanpham();
               include "hanghoa/list.php";
               break;
               // -----------------END XÓA SẢN PHẨM--------------------------

          case 'suasp':
               if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['ma_hh']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "hanghoa/update.php";
               break;
               // ---------------END lẤY SẢN PHẨM CẦN SỬA--------------------//
          case 'updatesp';
               if (isset($_GET['update']) && ($_GET['update'] > 0)) {
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $giam_gia = $_POST['giam_gia'];
                    $mo_ta = $_POST['mo_ta'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $dac_biet = $_POST['dac_biet'];
                    $so_luong = $_POST['so_luong'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../content/images/products/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }

                    
               }
               break;
          
               //------------KẾT THÚC DANH SÁCH SẢN PHẨM------------------------------------ 

          case 'dsbinhluan':
               $items = thong_ke_binh_luan();
               include  "binh-luan/list.php";
               break;
          case 'chi-tiet-binh-luan':
               if(isset($_GET["ma_hh"])){ 
                    $items = binh_luan_select_by_ma_hang_hoa($ma_hh);
                    if(count($items) == 0){
                    $items = thong_ke_binh_luan();
                    include  "binh-luan/list.php";
                    }else{
                    include "binh-luan/detail.php";
                    }
               }else{
                    $items = thong_ke_binh_luan();
                    include  "binh-luan/list.php";
               }
               break;
          case 'xoa-binh-luan':
               if(isset($_GET["btn_delete"])){
                    try {
                    binh_luan_delete($ma_bl);
                    $MESSAGE = "Xóa thành công!";
                    } 
                    catch (Exception $exc) {
                    $MESSAGE = "Xóa thất bại!";
                    }
               }
               $items = thong_ke_binh_luan();
               include  "binh-luan/list.php";
          break;
     //    end bình luận

          case 'dsslide':
               $items =  slide_select_all();
               include  "slide/list.php";
               break;
          case 'xoa-slide':
               if(isset($_GET["btn_delete"])){
               if(isset($_GET["btn_delete"])){
                    try {
                         slide_delete($ma_slide);
                         $MESSAGE = "Xóa thành công!";
                    } 
                    catch (Exception $exc) {
                         $MESSAGE = "Xóa thất bại!";
                    }
               }
               }
          $items = slide_select_all();
          include  "slide/list.php";
               break;

          case 'nhap-them-slide':
               include  "slide/new.php";
               break;

          case 'them-moi-slide':
               if(isset($_POST['btn_insert'])){
               $up_hinh = save_file("hinh_anh", "$IMAGE_DIR/slide/");
               $hinh_anh = strlen($up_hinh) > 0 ? $up_hinh : 'slide.png';
               try {
                    slide_insert( $tieu_de, $noi_dung, $duong_dan, $hinh_anh);
                    unset( $tieu_de, $noi_dung, $duong_dan, $hinh_anh);
                    $MESSAGE = 'Thêm mới thành công';
               } catch (Exception $exc) {
                    $MESSAGE = 'Thêm mới thất bại';
               }
               }
               include  "slide/new.php";
               break;
          // End slide
          //------------KẾT THÚC DANH SÁCH DANH MỤC------------------------------------ //
          case 'dskhachhang':
                    
               include "khachhang/dskhachhang.php";
             
                   break;
          case 'add':
               
               include "./../dao/khach-hang.php";
               include "./khachhang/xuly/add.php";  
                       
                                  
          break;
          case 'xoa-khachhang':
               include "./../dao/khach-hang.php";
               if(isset($_GET["btn_delete"])){
                    try {
                    khach_hang_delete($ma_kh);
                    $MESSAGE = "Xóa thành công!";
                    } 
                    catch (Exception $exc) {
                    $MESSAGE = "Xóa thất bại!";
                    }
               }

                include "./khachhang/dskhachhang.php";

               break;
               
          case 'add_kh':
               include_once "./../dao/khach-hang.php";

               if (isset($_POST['btn_insert']) ) {
                    $ma_kh = $_POST['ma_kh'];
                    $ten_kh = $_POST['ten_kh'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $mat_khau = $_POST['mat_khau'];
                    $kich_hoat = $_POST['kich_hoat'];
                    $gioi_tinh = $_POST['gioi_tinh'];
                    $hinh = $_FILES['hinh']['name'];
                   
                    $fileUpload = $_FILES['hinh'];
                    if (strpos($fileUpload["type"], 'image') === false) {    
                        $_SESSION['error'] = "Avatar phải là ảnh";
                    //     header("Location: /du-an-1/admin/index.php?act=add");
                        die;
                    }
                    if ($fileUpload["size"] > 3000000) {
                        $_SESSION['error'] = "Avatar phải nhỏ hơn 3M";
                    //     header("Location: /du-an-1/admin/index.php?act=add");
                        die;
                    }
                    $storePath = '../content/images/products/';
                    $filename = $fileUpload['name'];
                    $path = $storePath . $filename;
                    move_uploaded_file($fileUpload['tmp_name'], $path);
                    $hinh = '../content/images/products/' . $filename;

                    khach_hang_insert($ma_kh, $ten_kh, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat);
                    $thongbao = "Thêm thành công";
               }
               
           
               include "khachhang/dskhachhang.php";                                                       
               break;

          case 'suakh':
               include_once "./../dao/khach-hang.php";
               $dskhachhang = loadone_khachhang($ma_kh);
               //     var_dump($dskhachhang); die();
               include 'khachhang/xuly/update.php';
                break;

          case 'update_kh':
               include_once "./../dao/khach-hang.php";
             
          //     var_dump($ma_kh); die();  var_dump($_REQUEST); die();
               if (isset($_POST['btn_update']) ) {
                   $ma_kh = $_POST['ma_kh'];
                    $ten_kh = $_POST['ten_kh'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $mat_khau = $_POST['mat_khau'];
                    // $kich_hoat = $_POST['kich_hoat'];
                    $gioi_tinh = $_POST['gioi_tinh'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../content/images/products/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }

                    $fileUpload = $_FILES['hinh'];
                    if (strpos($fileUpload["type"], 'image') === false) {    
                        $_SESSION['error'] = "Avatar phải là ảnh";
                   
                        die;
                    }
                    if ($fileUpload["size"] > 3000000) {
                        $_SESSION['error'] = "Avatar phải nhỏ hơn 3M";
                   
                        die;
                    }
                    $storePath = '../content/images/products/';
                    $filename = $fileUpload['name'];
                    $path = $storePath . $filename;
                    move_uploaded_file($fileUpload['tmp_name'], $path);
                    $hinh = '../content/images/products/' . $filename;
                   khach_hang_update($ma_kh, $ten_kh, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh); 
               }
               include "khachhang/dskhachhang.php";  
               break;

              
               
               
                       
               
               
            
                 
               
          //------------KẾT THÚC DANH SÁCH DANH MỤC------------------------------------ //
          case 'dsnhanvien':
               include "nhanvien/dsnhanvien.php";
               break;
               case 'add_nv':
                    include_once "./../dao/nhan_vien.php";
                    include "./nhanvien/add_nv.php";  
                    if (isset($_POST['btn_insert']) ) {
                         $ma_nv = $_POST['ma_nv'];
                         $ten_nv = $_POST['ten_nv'];
                         $email = $_POST['email'];
                         $dia_chi = $_POST['dia_chi'];
                         $ngay_sinh = $_POST['ngay_sinh'];
                         $mat_khau = $_POST['mat_khau'];
                         $kich_hoat = $_POST['kich_hoat'];
                         $gioi_tinh = $_POST['gioi_tinh'];
                         $hinh = $_FILES['hinh']['name'];
                         $vai_tro = $_POST['vai_tro'];
                         $fileUpload = $_FILES['hinh'];
                         if (strpos($fileUpload["type"], 'image') === false) {    
                             $_SESSION['error'] = "Avatar phải là ảnh";
                             header("Location: /du-an-1/admin/index.php?act=add_nv");
                             die;
                         }
                         if ($fileUpload["size"] > 3000000) {
                             $_SESSION['error'] = "Avatar phải nhỏ hơn 3M";
                             header("Location: /du-an-1/admin/index.php?act=add_nv");
                             die;
                         }
                         $storePath = '../content/images/products/';
                         $filename = $fileUpload['name'];
                         $path = $storePath . $filename;
                         move_uploaded_file($fileUpload['tmp_name'], $path);
                         $hinh = '../content/images/products/' . $filename;
     
                         nhan_vien_insert($ma_nv, $ten_nv, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat, $vai_tro);
                         $thongbao = "Thêm thành công";
                    }
                    include "./nhanvien/dsnhanvien.php";
                 break;
                 case 'xoa-nv':
                    include "./../dao/nhan_vien.php";
                    if(isset($_GET["btn_delete"])){
                         try {
                         nhan_vien_delete($ma_nv);
                         $MESSAGE = "Xóa thành công!";
                         } 
                         catch (Exception $exc) {
                         $MESSAGE = "Xóa thất bại!";
                         }
                    }
     
                    include "./nhanvien/dsnhanvien.php";
     
                    break;
                     //------------KẾT THÚC ------------------------------------ //
                    case 'suanv':
                         include_once "./../dao/nhan_vien.php";
                         $dsnhanvien = loadone_nhanvien($ma_nv);
                         //     var_dump($dskhachhang); die();
                         include 'nhanvien/update.php';
                          break;
          
                    case 'update_nv':
                         include_once "./../dao/nhan_vien.php";
                       
                    //     var_dump($ma_kh); die();  var_dump($_REQUEST); die();
                         if (isset($_POST['btn_update']) ) {
                             $ma_nv = $_POST['ma_nv'];
                              $ten_nv = $_POST['ten_nv'];
                              $email = $_POST['email'];
                              $dia_chi = $_POST['dia_chi'];
                              $ngay_sinh = $_POST['ngay_sinh'];
                              $mat_khau = $_POST['mat_khau'];
                              // $kich_hoat = $_POST['kich_hoat'];
                              $gioi_tinh = $_POST['gioi_tinh'];
                              $hinh = $_FILES['hinh']['name'];
                              $target_dir = "../content/images/products/";
                              $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                   //  echo "Sorry, there was an error uploading your file.";
                              }
          
                              $fileUpload = $_FILES['hinh'];
                              if (strpos($fileUpload["type"], 'image') === false) {    
                                  $_SESSION['error'] = "Avatar phải là ảnh";
                             
                                  die;
                              }
                              if ($fileUpload["size"] > 3000000) {
                                  $_SESSION['error'] = "Avatar phải nhỏ hơn 3M";
                             
                                  die;
                              }
                              $storePath = '../content/images/products/';
                              $filename = $fileUpload['name'];
                              $path = $storePath . $filename;
                              move_uploaded_file($fileUpload['tmp_name'], $path);
                              $hinh = '../content/images/products/' . $filename;
                              nhanvien_update($ma_nv, $ten_nv, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh); 
                         }
                         include "nhanvien/dsnhanvien.php";  
                         break;


                   
          default:
               include "template/home.php";
               break;
     }
}else{
     include "template/home.php";
}
