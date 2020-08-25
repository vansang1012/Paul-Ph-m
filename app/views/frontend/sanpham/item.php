<!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section id="parallax" class="breadcrumb-area fix">
                <div class="breadcrumb-shape b-shape01 layer" data-depth="0.10"><img src="template/frontend/img/shape/b_shape01.png" alt="shape"></div>
                <div class="breadcrumb-shape b-shape02 layer" data-depth="0.20"><img src="template/frontend/img/shape/b_shape02.png" alt="shape"></div>
                <div class="breadcrumb-shape b-shape03 layer" data-depth="0.30"><img src="template/frontend/img/shape/b_shape03.png" alt="shape"></div>
                <div class="breadcrumb-shape b-shape04 layer" data-depth="0.10"><img src="template/frontend/img/shape/b_shape04.png" alt="shape"></div>
                <div class="breadcrumb-shape b-shape05 layer" data-depth="0.50"><img src="template/frontend/img/shape/b_shape05.png" alt="shape"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="breadcrumb-wrap">
                                <h2><?php echo $item['title']; ?></h2>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="\">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo helper_string_alias($category['title']).'-cp'.$category['id'].CMS_SUFFIX; ?>"><?php echo $category['title']; ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $item['title']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-md-6">
                            <div class="breadcrumb-img text-center">
                                <img src="template/frontend/img/bg/b_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- single-product -->
            <section class="single-product-wrap pt-100 pb-40">
                <div class="container">
                    <div class="row align-items-center mb-90">
                        <div class="col-xl-7 col-lg-6">
                            <div class="p-details-thumb">
                                <div class="tab-content" id="myTabContent">
                                    <?php $image = json_decode($item['gallery'], TRUE); ?>
                                    <?php if(isset($image) && count($image) > 1) {
                                      $count = 1;
                                      foreach ($image as $key => $val) {
                                    ?>
                                    <div class="tab-pane fade <?php if($key==0) { echo 'show active'; } ?>" id="gallery<?php echo $key+1; ?>" role="tabpanel" aria-labelledby="gallery<?php echo $key+1; ?>">
                                        <div class="single-d-thumb">
                                            <a href="<?php echo helper_string_image(500, 500, $val); ?>" class="popup-image"><img src="<?php echo helper_string_image(500, 500, $val); ?>" alt="img"></a>
                                        </div>
                                    </div>
                                    <?php }} else { ?>
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="second-img">
                                        <div class="single-d-thumb">
                                            <a href="<?php echo helper_string_image(500, 500, $item['image']); ?>" class="popup-image"><img src="<?php echo helper_string_image(500, 500, $item['image']); ?>" alt="img"></a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="product-thumbnail">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <?php $image = json_decode($item['gallery'], TRUE); ?>
                                    <?php if(isset($image) && count($image) > 1) {
                                      $count = 1;
                                      foreach ($image as $key => $val) {
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($key==0) { echo 'active'; } ?>" id="gallery<?php echo $key+1; ?>" data-toggle="tab" href="#gallery<?php echo $key+1; ?>" role="tab" aria-controls="gallery<?php echo $key+1; ?>"
                                            aria-selected="true">
                                            <img src="<?php echo helper_string_image(100, 100, $val); ?>" alt="">
                                        </a>
                                    </li>
                                    <?php }} ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="product-d-content">
                                <div class="product-details-t">
                                    <h3><?php echo $item['title']; ?></h3>
                                </div>
                                <div class="product-d-price">
                                    <?php
                                            if($item['price_market'] == 0 || $item['price_market'] <= $item['price']) {
                                                    echo '';
                                            } else {
                                                    echo '<span>'.number_format($item['price_market'], 0, '.', '.').'Đ</span>';  }
                                    ?>

                                    <?php
                                            if($item['price'] == 0) {
                                                    echo '<span>Liên hệ</span>';
                                            } else {
                                                    echo '<span>'.number_format($item['price'], 0, '.', '.').'Đ</span>';  }
                                    ?>
                                    
                                </div>
                                
                                <div class="p-details-text">
                                    <?php echo helper_string_cutnchar($item['description'], 400); ?>
                                </div>
                                <div class="cart-plus d-inline">
                                    <form action="#">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </form>
                                    <a href="<?php echo CMS_URL; ?>frontend/sanpham/addtocart/<?php echo $item['id'].CMS_SUFFIX; ?>?redirect=<?=base64_encode(CMS_URL.'gio-hang.html')?>" class="btn card-btn">Thêm vào giỏ</a>
                                </div>
                                <div class="product-features mt-40 mb-35">
                                    <ul>
                                        
                                        <li>
                                            <span>Danh mục:</span>
                                            <?php echo $category['title']; ?>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="items-dec-wrap">
                                <ul class="nav nav-tabs" id="mTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                            aria-selected="true">Chi tiết sản phẩm</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content" id="mTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="tab-padding">
                                            
                                            <div class="desc-content mb-30">
                                                <?php if($item['content'] == '') { ?>
                                                  <?php echo 'Đang cập nhật nội dung'; ?>
                                                <?php } else { ?>
                                                  <?php echo $item['content']; ?>
                                                <?php } ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-p p-relative pt-90">
                        <div class="sp-shape-wrap"><img src="template/frontend/img/shape/sp_shape.png" alt=""></div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="related-title text-center mb-50">
                                    <h3>Sản phẩm cùng chuyên mục</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row product-active">
                            <?php $product = $this->db->select('*')->from('sanpham_item')->where(array('publish' => 1, 'parentid' => $category['id']))->limit(8)->order_by('RAND()')->get()->result_array(); ?>
                            <?php if(isset($product) && count($product)) { foreach ($product as $number => $items) { ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="shop-products mb-55">
                                    <div class="sp-thumb">
                                        <a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>"><img src="<?php echo helper_string_image(600, 600, $items['image']); ?>" alt="<?php echo $items['title']; ?>"></a>
                                        <div class="product-action">
                                            <div class="button-left">
                                                <ul>
                                                    <li><a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>" class="pink-bg"><i class="ti-control-shuffle"></i></a></li>
                                                    <li><a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>" class="blue-bg"><i class="ti-eye"></i></a></li>
                                                    <li><a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>" class="green-bg"><i class="ti-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="cart-button">
                                                <a href="<?php echo CMS_URL; ?>frontend/sanpham/addtocart/<?php echo $items['id'].CMS_SUFFIX; ?>?redirect=<?=base64_encode(CMS_URL.'gio-hang.html')?>" class="btn">Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>"><?php echo $items['title']; ?></a></h4>
                                        <div class="price">
                                            <?php
                                                if($items['price_market'] == 0 || $items['price_market'] <= $items['price']) {
                                                        echo '';
                                                } else {
                                                        echo '<span class="old-price">'.number_format($items['price_market'], 0, '.', '.').'Đ</span>';  }
                                            ?>
                                            <?php
                                                if($items['price'] == 0) {
                                                        echo '<span>Liên hệ</span>';
                                                } else {
                                                        echo '<span>'.number_format($items['price'], 0, '.', '.').'Đ</span>';  }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- single-product-end -->
        </main>
        <!-- main-area-end -->