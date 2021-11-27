<?php
include "../dao/pdo.php";
include "../dao/danhmuc.php";
include "../dao/sanpham.php";
include "template/head.php";
include "template/slidebar.php";
// ------------kIÊM TRA ĐƯỜNG TRUYỀN VÀ CHẢ VỀ KẾT QUẢ-------------------------
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
                    $target_dir = "../upload/";
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
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }

                    
               }
               break;
               //------------KẾT THÚC DANH SÁCH SẢN PHẨM------------------------------------ 
          default:

               break;
     }
}
