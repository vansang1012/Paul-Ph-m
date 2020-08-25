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
                                <h2>Form thông tin đặt hàng</h2>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="\">Trang chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form thông tin đặt hàng</li>
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

            
            <!-- contact-form -->
            <section class="contact-form pb-50 pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="contact-form-title">
                                <h2>Thông tin đặt hàng</h2>
                                <p>Gửi thông tin liên hệ cho chúng tôi. Chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            $error = validation_errors();
                            echo isset($error)?'<ul class="cms-error">'.$error.'</ul>':'';
                            ?>
                            <form action="" class="contact-form" method="post">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 mb-20">
                                        <input type="text" name="data[fullname]" value="<?php echo isset($post_data['fullname'])?htmlspecialchars($post_data['fullname']):'';?>" placeholder="Họ tên của bạn">
                                    </div>
                                    <div class="col-xl-6 col-md-6 mb-20">
                                        <input type="text" name="data[email]" value="<?php echo isset($post_data['email'])?htmlspecialchars($post_data['email']):'';?>" placeholder="Địa chỉ email của bạn">
                                    </div>
                                    <div class="col-xl-6 col-md-6 mb-20">
                                        <input type="text" name="data[phone]" value="<?php echo isset($post_data['phone'])?htmlspecialchars($post_data['phone']):'';?>" placeholder="Số điện thoại của bạn">
                                    </div>
                                    <div class="col-xl-12 mb-20">
                                        <input type="text" name="data[address]" value="<?php echo isset($post_data['address'])?htmlspecialchars($post_data['address']):'';?>" placeholder="Địa chỉ của bạn">
                                    </div>
                                    <div class="col-xl-12 mb-20">

                                        <textarea name="data[notes]" placeholder="Nội dung" id="text-message" cols="30" rows="10" placeholder="Nội dung"><?php echo isset($post_data['content'])?htmlspecialchars($post_data['content']):'';?></textarea>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="frontend/contact/captcha" class="img-capcha" title="Mã xác nhận" alt="Mã xác nhận"/>
                                        <input type="text" name="txtCaptcha" value="" class="input-capcha" placeholder="Mã xác nhận" style="max-width: 160px;" />
                                    </div>
                                    <div class="col-xl-12 text-center">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Đặt hàng" style="color: #000;">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="maps-area">
                
                                <?php echo $this->system['map']; ?>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
        </main>
        <!-- main-area-end -->

