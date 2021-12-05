<?php

if (is_array($slide)) {
    extract($slide);
}
$hinhpath = "../content/images/slide/" . $hinh_anh;
if (is_file($hinhpath)) {
    $hinh_anh = "<img src='" . $hinhpath . "' height='90'>";
} else {
    $hinh_anh = "no photo";
}
?>
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sửa slide</h3>
            </div>
            <form action="index.php?act=update_slide" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tiêu đề slide</label>
                        <input type="text" class="form-control" name="tieu_de" value="<?= $tieu_de ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung slide</label>
                        <input type="text" class="form-control" name="noi_dung" value="<?= $noi_dung ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Đường dẫn slide</label>
                        <input type="text" class="form-control" name="duong_dan" value="<?= $duong_dan ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh_anh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          
                        </div>
                    </div>
                    <div class="form-group">
                    <?= $hinh_anh ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control" name="ngay_THEM" id="exampleInputPassword1" placeholder="0" value="<?= $ngay_them ?>">
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="ma_slide" value="<?= $ma_slide ?>">
                        <input type="submit" class="btn btn-primary" name="capnhat_slide" value="SỬA SLIDE">
                        <input type="reset" class="btn btn-primary" value="RESET">
                        <a href="index.php?act=dsslide"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>