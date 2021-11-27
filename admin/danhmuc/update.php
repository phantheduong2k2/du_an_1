<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa Loại Hàng</h3>
        </div>
        <!---------------------- ENT TILE -------------------------->
        <form action="index.php?act=updatedm" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Loại</label>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Loại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="ten_loai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                </div>
                <div class="card-footer">
                    <input type="hidden" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
                    <a href="index.php?act=listdanhmuc"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
            </div>
        </form>
    </div>
</div>