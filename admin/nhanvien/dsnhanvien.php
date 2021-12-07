
<div class="content-wrapper">

<a href="./index.php?act=add_nv" class="btn btn-primary">Create</a>

<div class="card-body">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>                   
      <th>Mã Nhân viên</th>
      <th>Tên Nhân Viên</th>                 
      <th>Email</th>
      <th>Số Điện thoại</th>
      <th>Địa Chỉ</th>
      <th>Ngày Sinh</th>
      <th>Mật Khẩu</th>                   
      <th>Avatar</th>
      <th>Giới Tính</th>
      <th>Kich Hoạt</th>
      <th>Vai Trò</th>
      <th colspan = "2">Thao tác</th>

    </tr>
    </thead>
    <tbody>
<?php

require_once "./../dao/nhan_vien.php";
$results = get();

foreach ($results as $result ) {
  extract($result);
  ?>
  
  <tr>
     
      <td><?= $ma_nv ?></td>    
      <td><?= $ten_nv ?> </td>  
      <td><?= $email ?> </td>
     
    
       <td> <?= $sdt ?></td>
      
      
      <td>  <?= $dia_chi ?></td> 
         
      
      
      <td>  <?= $ngay_sinh ?> </td>
         
     
      
      <td>  <?= $mat_khau ?> </td>
         
     
      <td> <img src="<?= $hinh ?>" width = "100px" height = "100px">  </td>
      
     
      <td>  <?= $gioi_tinh?'nam':'nữ'; ?>  </td>    
         
                  
      <td>      <?= $kich_hoat ?> </td>  
      <td>      <?= $vai_tro ?> </td>
      
      <td>
      <a href="index.php?act=suanv&ma_nv=<?=$ma_nv?>">Sửa</a>
      </td>
      <td> 
         <a href="index.php?act=xoa-nv&btn_delete&ma_nv=<?=$ma_nv?>"  class="btn btn-danger" >Delete</a>               
      </td>
  </tr>
<?php } ?>

</tbody>
  </table>
</div>
<!-- /.card-body -->
</div>


