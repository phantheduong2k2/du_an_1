<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
        <?php foreach($slides as $slide){ 
             extract($slide);
            ?>
        <div class="carousel-item active">
            <img src="content/images/slide/<?= $hinh_anh ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- end slide -->
<div class="content-custom">
    <div class="title">
        <h1>Sản phẩm thịnh hành</h1>
    </div>
    <div class="products trend-products">
        <div class="product">
            <?php
            foreach ($products as $product) {
                extract($product);
            ?>
                <div class="product-box">
                    <div class="product-box-img">
                        <img src="content/images/products/<?= $hinh ?>" alt="">
                    </div>
                    <div class="product-box-text">
                        <p class="product-name"><?= $ten_hh ?></p>
                        <p class="product-rate-sale"><?= $don_gia ?></p>
                        <del class="product-rate">500k</del>
                        <form action="">
                            <input class="form-control-custom" type="button" value="Thêm vào giỏ">
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end trent products trend-products-->
    <div class="title">
        <h1>Sản phẩm</h1>
    </div>
    <div class="products">
        <div class="product">
            <?php
            foreach ($products as $product) {
                extract($product);
            ?>
                <div class="product-box">
                    <div class="product-box-img">
                        <img src="content/images/products/<?= $hinh ?>" alt="">
                    </div>
                    <div class="product-box-text">
                        <p class="product-name"><?= $ten_hh ?></p>
                        <p class="product-rate-sale"><?= $don_gia ?></p>
                        <del class="product-rate">500k</del>
                        <form action="">
                            <input class="form-control-custom" type="button" value="Thêm vào giỏ">
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end products-->
</div>


				