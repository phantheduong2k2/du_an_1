
    <!--Hiển thị giao diện cho moin người nhập-->
    <form class="col-8 offset-2" method="post" action="/du_an_1/admin/index.php?act=update_nv" enctype="multipart/form-data">
    <?php 
        extract($dsnhanvien);
        ?>
<input type="text" name = "ma_nv" value =" <?=$ma_nv ?>" >

        
   <div class="mt-3">
       <label for="exampleInputEmail1">Tên Nhân Viên</label>
       <input  type="text" name="ten_nv" value = "<?=$ten_nv ?>"class="form-control">
   </div>
   <div class="mt-3">
       <label>Email</label>
       <input value = "<?=$email ?>           
       " type="email" name="email" class="form-control">
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
       <input value = "<?=$mat_khau;?>" type="number" name="mat_khau" class="form-control">  
  </div>
  <div class="mt-3">
       <label>Ngày Sinh</label>
       <input value = "<?=$ngay_sinh;?>" type="date" name="ngay_sinh" class="form-control">  
  </div>
        <div class="mt-3">
       <label>Địa chỉ</label>
       <input value = "<?=$dia_chi;?>" type="text" name="dia_chi" class="form-control">
   </div>
   <div class="mt-3">
       <label>Số Điện Thoại</label>
       <input value = "<?=$sdt;?>" type="number" name="sdt" class="form-control">
   </div>

 
   <div class="mt-3">
       <label>Giới tính</label>
       <br>
       <label >Nam</label>
       <input type="radio" value="0" name = "gioi_tinh" <?=$gioi_tinh?'checked':''?>>
       <label >Nữ</label>
       <input type="radio" value="1" name = "gioi_tinh"<?=$gioi_tinh?'checked':''?>>
    </div>
   
   <div class="mt-3">
       <button class="btn btn-primary" type="submit" name="btn_update">Thực hiện</button>

       <a href="http://localhost:8087/du_an_1/admin/khachhang/xuly/index.php?act=dsnhavien" class="btn btn-defaulf">Cancel</a>
   </div>      

     <?php ?>
    
    </form>

   
