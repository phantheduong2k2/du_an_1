  
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
        <form action="index.php" method="post">
            <table class="table table-bordered table-hover"> 
                <thead class="alert-info">
                    <tr>
                        <th>Mã slide</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung </th>
                        <th>Đường dẫn</th>
                        <th>Hình ảnh</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $item) {
                            extract($item);
                        ?>
                        <tr>
                            <td><?=$ma_slide?></td>
                            <td><?=$tieu_de?></td>
                            <td><?=$noi_dung?></td>
                            <td><?=$duong_dan?></td>
                            <td><img src="<?=$CONTENT_URL?>/images/slide/<?=$hinh_anh?>" width='50px'></td>
                            <td>
                                <button class="btn btn-default"><a href="index.php?act=cap-nhat-slide&ma_slide=<?=$ma_slide?>">Sửa</a></button>
                                <button class="btn btn-default"><a href="index.php?act=xoa-slide&btn_delete&ma_slide=<?=$ma_slide?>">Xóa</a></button>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                </tbody>
                
            </table>
            <div class="form-group">
                    <button class="btn btn-default"><a href="index.php?act=nhap-them-slide">Nhập thêm</a></button>
            </div>
        </form>
    </div>
</div
