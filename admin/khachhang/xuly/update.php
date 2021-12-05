<?php
require_once './../../db/khach_hang.php';
 
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $data = findById($id);
}
?>






<?php if(isset($_SESSION['error']))
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    } 
    ?>
    <!--Hiển thị giao diện cho moin người nhập-->
    <form class="col-8 offset-2" method="post" action="/du_an_1/admin/index.php?act=update_khachhang" enctype="multipart/form-data">
       
   
        <div class="mt-3">
            <label>Mã Khách Hàng</label>
            <input value = "<?php 
           if (isset($data['ma_kh'])) {
            echo $data['ma_kh'];
        }
            ?>" type="text" name="ma" class="form-control">
        </div>
        <div class="mt-3">
            <label>Tên Khách Hàng</label>
            <input value = "<?php
             if (isset($data['ten_kh'])) {
                echo $data['ten_kh'];
            }
             ?>" type="text" name="ten_kh" class="form-control">
        </div>
        <div class="mt-3">
            <label>Email</label>
            <input value = "<?php 
            if (isset($data['email'])) {
                echo $data['email'];
            }
            ?>" type="email" name="email" class="form-control">
        </div> 

        <div class="mt-3">
                <label>Avatar</label>
                <input
                    class="form-control"
                    type="file"
                    name="hinh"
                />
        <div class="mt-3">
            <label>mật khẩu</label>
            <input value = "<?php
             if (isset($data['mat_khau'])) {
                echo $data['mat_khau'];
            }
             ?>" type="number" name="mat_khau" class="form-control">  
       </div>
      <div class="mt-3">
            <label>Ngày Sinh</label>
            <input value = "<?php
             if (isset($data['ngay_sinh'])) {
                echo $data['ngay_sinh'];
            }
             ?>" type="number" name="ngay_sinh" class="form-control">  
       </div>
             <div class="mt-3">
            <label>Địa chỉ</label>
            <input value = "<?php 
            if (isset($data['dia_chi'])) {
                echo $data['dia_chi'];
            }
            ?>" type="text" name="dia_chi" class="form-control">
        </div>
        <div class="mt-3">
            <label>Số Điện Thoại</label>
            <input value = "<?php
             if (isset($data['sdt'])) {
                echo $data['sdt'];
            }
             ?>" type="number" name="sdt" class="form-control">
        </div>
  
      
        <div class="mt-3">
            <label>Giới tính</label>
            <select name="gioi_tinh" class="form-control">
                <option value="0"
                  <?php echo $data['gioi_tinh'] == 0 ? "selected":"" ?>
                >Nữ</option>
                <option value="1"
                   <?php echo $data['gioi_tinh'] == 1 ? "selected":"" ?>
                > Nam</option>
            </select>
        </div>
           <div class="mt-3">
            <label>Kích Hoạt</label>
            <select name="khich_hoat" class="form-control">
                <option value="0"
                  <?php echo $data['khich_hoat'] == 0 ? "selected":"" ?>
                >0</option>
                <option value="1"
                   <?php echo $data['khich_hoat'] == 1 ? "selected":"" ?>
                > 1</option>
            </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Thực hiện</button>

            <a href="http://localhost:8087/du_an_1/admin/khachhang/xuly/index.php?act=dskhachhang" class="btn btn-defaulf">Cancel</a>

        </div>
    </form>
   
