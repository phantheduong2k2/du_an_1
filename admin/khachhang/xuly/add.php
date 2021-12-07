<?php

 if(isset($_SESSION['error']))
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    } 
    ?>

<div class="top">
<form class="col-9 offset-2"    method="POST"
            action="/du_an_1/admin/index.php?act=add_kh"
            enctype="multipart/form-data">

<h1>Thêm Khách Hàng</h1>

    <div class="">
        
        <div class="col">
            <div class="form-group">
                <label for="">Mã Khách Hàng</label>
                <input class="form-control" type="text" name="ma_kh" >
            </div>
        </div>
        <br>
        <div class="col">
            <div class="form-group">
                <label for="">Tên Khách Hàng</label>
                <input class="form-control" type="text" name="ten_kh" >
            </div>
        </div> <br>
     
        
        <div class="col">
            <div class="form-group">
                <label for="">Email Khách Hàng</label>
                <input class="form-control" type="email" name="email" >
            </div>
        </div> <br>

        <div class="col">
            <div class="form-group">
                <label for="">Avatar</label>
                <input class="form-control" type="file" name="hinh"  placeholder="" >
            </div>
        </div> <br>
     
        <div class="col">
            <div class="form-group">
                <label for="">Mật Khẩu</label>
                <input class="form-control" type="text" name="mat_khau" >
            </div>
        </div> <br>
        <div class="col">
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input class="form-control" type="date" name="ngay_sinh" >
            </div>
        </div> <br> 
             <div class="col">
            <div class="form-group">
                <label for="">Dịa Chỉ</label>
                <input class="form-control" type="text" name="dia_chi" >
            </div>
        </div> <br>
        <div class="col">
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input class="form-control" type="text" name="sdt" >
            </div>
        </div> <br>
      
        <div class="col">
            <div class="form-group">
                <label for="">Giới Tính</label>
                <div class="form-special">
                    <input type="radio" name="gioi_tinh" value="0">Nam
                    <input type="radio" name="gioi_tinh" value="1" checked> Nữ
                </div>
            </div>
        </div>
        <br>
        <div class="col">
            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="form-special">
                    <input type="radio" name="kich_hoat" value="1">1
                    <input type="radio" name="kich_hoat" value="0" checked> 0
                </div>
            </div>
        </div>
        <br>
            <button class="btn btn-default" type="submit" name="btn_insert">Thêm</button>
            <button class="btn btn-default"><a href="http://localhost:8087/du_an_1/admin/khachhang/xuly/index.php?act=dskhachhang">Danh sách</a></button>
      
 </form>   
       </div>
</div>

<?php


    
?>