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
                                <h2><?php echo $category['title']; ?></h2>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="\">Trang chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $category['title']; ?></li>
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
            <!-- shaop-area -->
            <section class="shop-wrap pt-50 pb-50">
                <div class="container">
                  <?php if(isset($list) && count($list)) { ?>
                    <div class="row">
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 text-left text-md-right">
                            
                            <div class="short-by">
                                
                                <form action="" method="POST" class="short-select">
                                  <select name="sort" id="" class="select-third" onchange="this.form.submit()">

                                      <option value="id_desc" <?php if($_SESSION['sort']=='id_desc'){ echo "selected"; }?>>-- Hiển thị sắp xếp --</option>
                                      <option value="price_asc" <?php if($_SESSION['sort']=='price_asc'){ echo "selected"; }?>>Giá tăng dần</option>
                                      <option value="price_desc" <?php if($_SESSION['sort']=='price_desc'){ echo "selected"; }?>>Giá giảm dần</option>
                                      <option value="title_asc" <?php if($_SESSION['sort']=='title_asc'){ echo "selected"; }?>>Theo tên A->Z</option>
                                      <option value="title_desc" <?php if($_SESSION['sort']=='title_desc'){ echo "selected"; }?>>Theo tên Z->A</option>
                                      <option value="viewed_desc" <?php if($_SESSION['sort']=='viewed_desc'){ echo "selected"; }?>>Xem nhiều nhất</option>
                                      <option value="id_desc" >Hiển thị mặc định</option>

                                  </select>

                                </form>
                            </div>
                        </div>
                        
                    </div>
                  <?php } ?>
                    <div class="inner-shop-products mt-30">
                        <div class="row">
                          <?php if(isset($list) && count($list)) { foreach($list as $key => $items) { ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.<?php echo $key+2; ?>s">
                              <div class="shop-products">
                                  <div class="sp-thumb">
                                      <a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>"><img src="<?php echo helper_string_image(600, 600, $items['image']); ?>" alt="<?php echo $items['title']; ?>"></a>
                                      <?php
                                        if( $items['price_market'] > $items['price'] && $items['price'] > 0 ) {
                                            $sale = 100*($items['price'] - $items['price_market'])/$items['price_market'];
                                            echo '<span>'.(int)$sale.'%</span>';
                                        }
                                        ?>
                                      <div class="product-action">
                                          
                                          <div class="cart-button">
                                              <a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>" class="btn">Thêm vào giỏ</a>
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
                          <?php }} else { ?>
                            <div class="col-xl-12 col-lg-12 col-sm-12">
                              <p>Đang cập nhật sản phẩm...</p>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <?php if(isset($pagination) && !empty($pagination) && count($pagination)){ ?>
                          <div class="pagination-wrap text-center">
                              <?php echo helper_string_pagination_frontend($pagination, $total_rows, 'Trang'); ?>
                              <div class="clear-both"></div>
                          </div>
                          <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- shaop-area-end -->
        </main>
        <!-- main-area-end -->