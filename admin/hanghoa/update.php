<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}

?>
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sưa sản phẩm</h3>
            </div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên hàng hóa</label>
                        <input type="text" class="form-control" name="ten_hh" value="<?= $ten_hh ?>">
                    </div>
                    <!-- emd -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Đơn giá</label>
                        <input type="number" class="form-control" name="don_gia" value="<?= $don_gia ?>">
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giảm giá</label>
                        <input type="number" class="form-control" name="giam_gia" value="<?= $giam_gia ?>">
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                        </div>
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <?= $hinh ?>
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mo_ta" rows="3" placeholder="Enter ..." value=""><?= $mo_ta ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control" name="ngay_nhap" id="exampleInputPassword1" placeholder="0" value="<?= $ngay_nhap ?>">
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
                        <input type="number" class="form-control" name="so_luong" id="exampleInputPassword1" placeholder="0" value="<?= $so_luong ?>">
                    </div>
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="update" value="SỬA SẢN PHẨM">
                <input type="reset" class="btn btn-primary" value="RESET">
                <a href="index.php?act=listsanpham"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
            </div>
            </form>
        </div>
    </div>
</div>