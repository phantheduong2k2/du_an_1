<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div class="container-custom">
        <div class="header-top">
            <div class="header-top-text">
                <span>Chào mừng đến với Sport store!</span>
            </div>
        </div>
        <!-- end header-top -->
        <div class="header-nav">
            <nav class="navbar-header">
                <a href="#">
                    <img src="content/images/logo.png" alt="" class="logo-img">
                </a>
            </nav>
            <ul class="navbar-menu">
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="#">Tin Tức</a></li>
            </ul>
            <div class="navbar-icon">
                <a href="">
                    <ion-icon name="search"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="person"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="cart"></ion-icon>
                </a>
            </div>
        </div>
        <!-- end header-nav -->
        <?php
        
        include_once $mainView;

        ?>
          <!-- end content -->
          <div class="support-function">
              <div class="support-function-text">
                  <h3>Bạn cần hỗ trợ,<br>Hãy chat với chúng tôi</h3>
              </div>
              <div class="support-function-img">
                    <a href="">
                        <img src="content/images/i-ins.png" alt="">
                        <img src="content/images/i-fb.png" alt="">
                        <img src="content/images/i-mess.png" alt="">
                        <img src="content/images/i-tg.png" alt="">
                        <img src="content/images/i-tw.png" alt="">
                        <img src="content/images/i-phone.png" alt="">
                    </a>
              </div>
          </div>
          <!-- end contact us -->
          <footer class="footer-custom">
            <ul class="ul-footer-parent">
                <li class="li-footer-parent">
                    <a href="">
                        <img src="../../content/images/logo.png" alt="" class="logo-img">
                    </a>
                </li>
                <li class="li-footer-parent">
                    Sản Phẩm
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Giày</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần áo</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Phụ kiện</a>
                        </li>
                        <br>
                        <li class="li-footer">
                            <a href="">Hàng mới về</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Áo</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần</a>
                        </li class="li-footer">
                        <li class="li-footer">
                            <a href="">Túi</a>
                        </li>
                    </ul>
                   
                </li>
                <li class="li-footer-parent">
                    Thể Thao
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Quần áo tập ghim</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Áo ngực thể thao</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần tất nữ</a>
                        </li>
                        <br>
                        <li class="li-footer">
                            <a href="">Giày bóng đá</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Giày bóng đá trong nhà</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Bóng đá</a>
                        </li class="li-footer">
                        <li class="li-footer">
                            <a href="">Túi</a>
                        </li>
                    </ul>
                </li>
                <li class="li-footer-parent">
                   Bộ Sưu Tập
                   <ul class="ul-footer">
                    <li class="li-footer">
                        <a href="">Giày adidas Pharrell Williams</a>
                    </li>
                    <br>
                    <li class="li-footer">
                        <a href="">Giày Superstar</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Giày Stan Smith</a>
                    </li>

                    <li class="li-footer">
                        <a href="">Giày Gazelle</a>
                    </li>
                    <li class="li-footer">
                        <a href="">Giày NMD</a>
                    </li>
                </ul>
                </li>
                <li class="li-footer-parent">
                    Thông Tin Về Công Ty
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Giới thiệu về chúng tôi</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Cơ hội nghề nghiệp</a>
                        </li>

                        <li class="li-footer">
                            <a href="">Tin tức</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="footer-custom-bottom">
                <ul class="">
                    <li>
                        <a href="">
                             Chính sách Bảo mật
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Điều Khoản và Điều Kiện
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Thông tin cửa hàng
                        </a>
                    </li>
                    <li class="li-end">
                        <a href="">
                            ©2021 
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <!-- end -->
    </div>
</body>
</html>