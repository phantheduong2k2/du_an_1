<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Sản Phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <select name="ma_loai" class="form-control select2" style="width: 100%;">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option selected="selected" value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_hh" id="exampleInputEmail1"
                        placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="don_gia" id="exampleInputPassword1" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input type="number" class="form-control" name="giam_gia" id="exampleInputPassword1"
                        placeholder="0">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Ảnh sản phẩm</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <!-- end IMG sản phẩm -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="mo_ta" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày nhập</label>
                    <input type="date" class="form-control" name="ngay_nhap" id="exampleInputPassword1" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sản phâm có đặc biệt hay không</label>
                    <br>
                    <input type="radio" class="" name="dac_biet" id="dac_biet" value="1">
                    <label for="dac_biet">Đặc biệt </label>
                    <br>
                    <input type="radio" class="" name="dac_biet" id="dac_biet_1" value="0">
                    <label for="dac_biet_1">Không đặc biệt </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input type="number" class="form-control" name="so_luong" id="exampleInputPassword1"
                        placeholder="0">
                </div>
        
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="themmoi" value="THÊM MỚI">
                <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
                <a href="index.php?act=listsanpham"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>