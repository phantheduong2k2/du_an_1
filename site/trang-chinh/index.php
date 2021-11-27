<?php
require_once "../../global.php";

if(exist_param("san_pham")){
    $VIEW_NAME = "trang-chinh/san-pham.php";
}elseif(exist_param("gioi_thieu")) {
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
}elseif(exist_param("lien_he")) {
    $VIEW_NAME = "trang-chinh/lien-he.php";
}elseif(exist_param("tin_tuc")) {
    $VIEW_NAME = "trang-chinh/tin-tuc.php";
}else{
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}
require "../layout.php";
?>