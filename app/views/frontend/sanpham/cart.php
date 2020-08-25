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
                        <div class="col-lg-7 col-md-7">
                            <div class="breadcrumb-wrap">
                                <h2>Giỏ hàng của tôi</h2>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                        <li class="breadcrumb-item active">Giỏ hàng của tôi</li>
                                        
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-5">
                            <div class="breadcrumb-img text-center">
                                <img src="template/frontend/img/bg/b_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="main-content pt-50 pb-50">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-md-12">
                          
                          <form action="" method="post" accept-charset="utf-8">
                            
                            <table id="t01">
                              <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Ảnh sản phẩm</th>
                                <th class="text-center">Tên sản phẩm</th> 
                                <th class="text-center">Giá thuê</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Thành tiền</th>
                              </tr>
                              <?php
                              $total = 0;
                              if(isset($full_data) && count($full_data)){
                              foreach($full_data as $key => $val){
                                $total_temp = 0;
                                $total_temp = $val['price'] * $val['number'];
                                $total = $total + $total_temp;
                                //$product_cart = get_item('*', $val['id'], 'products_item');
                                $product_cart = $this->db->from('sanpham_item')->where(array('id'=>$val['id']))->get()->row_array();  
                            ?>
                              <tr>
                                <td colspan="" rowspan="" headers="" class="text-center"><?php echo $key+1; ?></td>
                                <td class="text-center"><a class="image img-scaledown" target="" href="<?php echo helper_string_alias($val['title']).'-ap'.$val['id'].CMS_SUFFIX; ?>" title="<?php echo htmlspecialchars($val['title']); ?>">
                                <img src="<?php echo helper_string_image(130,130,$product_cart['image'])?>" alt="<?php echo htmlspecialchars($val['title']); ?>" /></a></td>
                                <td class="text-center"><a href="<?php echo helper_string_alias($val['title']).'-ap'.$val['id'].CMS_SUFFIX; ?>" title="<?php echo htmlspecialchars($val['title']); ?>"><?php echo htmlspecialchars($val['title']); ?></a></td>
                                <td class="text-center"><?php echo number_format($val['price']); ?>₫</td>
                                <td colspan="" rowspan="" headers=""><div class="quantity" style="color:red;"><input class="input-quantity"  type="number" value="<?php echo $val['number']; ?>" name="number[<?php echo $val['id']; ?>]" style="width:50px;text-align:right;" /></div></td>
                                <td colspan="" rowspan="" headers="" class="text-center"><div class="price"><?php echo number_format($total_temp,0,'.','.'); ?>₫</div></td>
                              </tr>
                            <?php }} ?>
                              
                            </table>
                            <div class="cart-footer" style="margin-top: 20px">
                              <input name="btnNumber" type="submit" class="btn update-cart" value="Cập nhật">
                              <a href="thanh-toan.html" class="btn">Thanh toán</a>
                            </div>
                          </form>     
                              
                      </div>

                  </div>
              </div>
            </div>

