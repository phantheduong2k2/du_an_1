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
               if (isset($_POST['capnhat_sp']) && ($_POST['capnhat_sp'] > 0)) {
                    $ma_hh = $_POST['ma_hh'];
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
                    update_sanpham($ma_hh, $ten_hh, $don_gia, $giam_gia, $mo_ta, $ngay_nhap, $dac_biet, $so_luong,$hinh);
                    $thongbao = "Cập nhật thành công";
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham();
               include "hanghoa/list.php";
               break;

               //------------KẾT THÚC DANH SÁCH SẢN PHẨM------------------------------------ 

          case 'dsbinhluan':
               $items = thong_ke_binh_luan();
               include  "binh-luan/list.php";
               break;
          case 'chi-tiet-binh-luan':
               if (isset($_GET["ma_hh"])) {
                    $items = binh_luan_select_by_ma_hang_hoa($ma_hh);
                    if (count($items) == 0) {
                         $items = thong_ke_binh_luan();
                         include  "binh-luan/list.php";
                    } else {
                         include "binh-luan/detail.php";
                    }
               } else {
                    $items = thong_ke_binh_luan();
                    include  "binh-luan/list.php";
               }
               break;
          case 'xoa-binh-luan':
               if (isset($_GET["btn_delete"])) {
                    try {
                         binh_luan_delete($ma_bl);
                         $MESSAGE = "Xóa thành công!";
                    } catch (Exception $exc) {
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
               if (isset($_GET["btn_delete"])) {
                    if (isset($_GET["btn_delete"])) {
                         try {
                              slide_delete($ma_slide);
                              $MESSAGE = "Xóa thành công!";
                         } catch (Exception $exc) {
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
               if (isset($_POST['btn_insert'])) {
                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    $target_dir = "../content/images/slide/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }
                    try {
                         slide_insert($tieu_de, $noi_dung, $duong_dan, $hinh_anh);
                         
                         $MESSAGE = 'Thêm mới thành công';
                    } catch (Exception $exc) {
                         $MESSAGE = 'Thêm mới thất bại';
                    }
               }
               include  "slide/new.php";
               break;

          case 'sua_slide':
               if (isset($_GET['ma_slide']) && ($_GET['ma_slide'] > 0)) {
                    $slide = loadone_slide($_GET['ma_slide']);
               }

               include "slide/update.php";
               break;
          case 'update_slide':
               if (isset($_POST['capnhat_slide'])) {
                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    $target_dir = "../content/images/slide/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                         //  echo "Sorry, there was an error uploading your file.";
                    }
                         slide_update($tieu_de, $noi_dung, $duong_dan, $hinh_anh,$ma_slide);
                         $MESSAGE = 'Thêm mới thành công';
               }
               $items =  slide_select_all();
               include  "slide/list.php";
               break;
               // End slide
          default:
               include "template/home.php";
               break;
     }
} else {
     include "template/home.php";
}
