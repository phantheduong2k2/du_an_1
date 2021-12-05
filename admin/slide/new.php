  
<div class="content-wrapper">
    <div class="alert alert-info">
        <h3>Thêm mới slide</h3>
    </div>
    <div class="alert">
    <?php
    if(strlen($MESSAGE)>0){
        echo $MESSAGE;
        unset($MESSAGE);
    }
    ?>
    </div>
    <div class="card-body">
        <form action="index.php?act=them-moi-slide" method="post" enctype="multipart/form-data">
           <div class="">
               <label for="exampleInputEmail1">Tiêu đề</label>
               <input type="text" class="form-control" name="tieu_de" placeholder="nhâp tiêu đề slide">
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Nội dung</label>
               <input type="text" class="form-control" name="noi_dung" placeholder="nhập nội dung slide">
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Đường dẫn</label>
               <input type="text" class="form-control" name="duong_dan" placeholder="nhập đường dẫn slide">
           </div>
           <div class="form-group">
               <label for="exampleInputFile">Hình ảnh</label>
               <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh_anh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
           </div>
           <div class="card-footer">
               <button  class="btn btn-primary" name="btn_insert">Thêm mới</button>
               <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
               <a href="index.php?act=dsslide""><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
           </div>
        </form>
    </div>
</div
