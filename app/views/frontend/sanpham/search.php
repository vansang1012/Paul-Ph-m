<div id="PageContainer" class="is-moved-by-drawer">
    <main class="main-content" role="main">


        <section id="collection-wrapper" >
            <div class="wrapper">

                <div class="inner">
                    <div class="grid">
                        <div class="content-main grid__item large--five-sixths medium--one-whole small--one-whole float-right">

                            <div class="collection-content-wrapper">
                                <div class="collection-head">
                                    <div class="grid mg-left-15">
                                        <div class="grid__item large--one-half medium--one-whole small--one-whole pd-left15">
                                            <div class="collection-title">
                                                <h1>Bạn đang tìm kiếm: <?php echo $keyword; ?></h1>
                                            </div>
                                        </div>
                                        <div class="grid__item large--one-half medium--one-whole small--one-whole pd-left15">
                                            <div class="collection-sorting-wrapper">
                                                <!-- /snippets/collection-sorting.liquid -->
                                                <div class="form-horizontal text-right">

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="collection-body">
                                    <div class="grid-uniform product-list md-mg-left-10">
                                        <?php if(isset($list) && count($list)) { foreach($list as $key => $items) { ?>
                                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-half small--one-half">
                                            <div class="product-item product-item-1023643427">
                                                <div class="product-img">
                                                    <a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>">
                                                        <img class="img " id="1023643427" src="<?php echo helper_string_image(400, 600, $items['image']); ?>" alt="<?php echo $items['title']; ?>" />
                                                    </a>
                                                    <div class="product-actions text-center clearfix medium--hide small--hide">
                                                        <div>
                                                            <button type="button" class="btnAddToCart add-to-cart " onclick="window.location.href='<?php echo CMS_URL; ?>frontend/sanpham/addtocart/<?php echo $items['id'].CMS_SUFFIX; ?>?redirect=<?=base64_encode(CMS_URL.'gio-hang.html')?>'"><span><img src="upload/image/cart-icon.png" /></span>
                                                            </button>
                                                            <button type="button" class="btnQuickView quick-view" onclick="window.location.href='<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>'"><span><img src="upload/image/search-icon.png" /></span>
                                                            </button>
                                                            <button type="button" class="btnBuyNow buy-now " onclick="window.location.href='<?php echo CMS_URL; ?>frontend/sanpham/addtocart/<?php echo $items['id'].CMS_SUFFIX; ?>?redirect=<?=base64_encode(CMS_URL.'gio-hang.html')?>'">
                                                              <img src="upload/image/buynow-icon.png" /> Mua ngay</button>
                                                        </div>
                                                    </div>
                                                    <div class="product-tags">
                                                      <?php
                                                        if( $items['price_market'] > $items['price'] && $items['price'] > 0 ) {
                                                            $sale = 100*($items['price'] - $items['price_market'])/$items['price_market'];
                                                            echo '<span class="tag-saleoff text-center">Sale<strong>'.(int)$sale.'%</strong></span>';
                                                        }
                                                        ?>

                                                      <span class="tag-new text-center">
                                                        New
                                                      </span>
                                                		</div>

                                                </div>

                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="<?php echo helper_string_alias($items['title']).'-ap'.$items['id'].CMS_SUFFIX; ?>"><?php echo $items['title']; ?></a>
                                                    </div>

                                                    <div class="product-price clearfix">
                                                      <?php
                                                          if($items['price_market'] == 0 || $items['price_market'] <= $items['price']) {
                                                              echo '';
                                                          } else {
                                                              echo '<span class="original-price"><s>'.number_format($items['price_market'], 0, '.', '.').'Đ</s></span>';  }
                                                      ?>

                                                      <?php
                                                          if($items['price'] == 0) {
                                                              echo '<span class="current-price">Liên hệ</span>';
                                                          } else {
                                                              echo '<span class="current-price">'.number_format($items['price'], 0, '.', '.').'Đ</span>';  }
                                                      ?>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                      <?php }} else { ?>
                                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-half small--one-half">
                                          <p>Không tìm thấy sản phẩm...</p>
                                        </div>
                                      <?php } ?>
                                    </div>
                                    <div class="pagination not-filter">

                                      <?php if(isset($pagination) && !empty($pagination) && count($pagination)){ ?>
                                      <div id="pagination-custom" class="text-center clear-left">
                                          <?php echo helper_string_pagination_frontend($pagination, $total_rows, 'Trang'); ?>
                                          <div class="clear-both"></div>
                                      </div>
                                      <?php } ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="sidebar-right grid__item large--one-sixth medium--one-whole small--one-whole">
                              <div class="product-detail-sidebar">
                                <?php $product_cate = $this->db->select('*')->from('sanpham_category')->where(array('publish' => 1, 'parentid' => 2))->get()->result_array(); ?>
                                <?php if(isset($product_cate) && count($product_cate)) { foreach ($product_cate as $number => $products_cate) { ?>
                                  <div class="item">
                                      <h3><?php echo $products_cate['title']; ?></h3>
                                      <ul class="no-bullets">
                                        <?php $product_cate_child = $this->db->select('*')->from('sanpham_category')->where(array('publish' => 1, 'parentid' => $products_cate['id']))->get()->result_array(); ?>
                                        <?php if(isset($product_cate_child) && count($product_cate_child)) { foreach ($product_cate_child as $number => $products_cate_child) { ?>
                                          <li>
                                              <a href="<?php echo helper_string_alias($products_cate_child['title']).'-cp'.$products_cate_child['id'].CMS_SUFFIX; ?>"><?php echo $products_cate_child['title']; ?></a>
                                          </li>
                                        <?php }} ?>
                                      </ul>
                                  </div>
                                <?php }} ?>


                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
</div>
