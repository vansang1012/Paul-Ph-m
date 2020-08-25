<div id="contact" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-close" data-dismiss="modal">
                    <img src="template/frontend/img/icon-close-white.png" alt="Close">
                </button>
                <div class="sec-title">
                    <h2 class="title">Liên hệ với tôi</h2>
                </div>
            </div>
            <div class="modal-body">
                <div class="sec-content">
                    <div class="contact">
                        <div class="box message">
                            <div class="form">
                                <div id="ctl00_Header1_ModalContact1_upnlContact">

                                    <div id="ctl00_Header1_ModalContact1_pnlContact" class="validationEngineContainer" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Header1_ModalContact1_lbtSend')">
                                        <?php
                                        $error = validation_errors();
                                        echo isset($error)?'<ul class="cms-error">'.$error.'</ul>':'';
                                        ?>
                                     <form action="#" class="contact-form">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="data[fullname]" value="<?php echo isset($post_data['fullname'])?htmlspecialchars($post_data['fullname']):'';?>" placeholder="Họ tên của bạn">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="data[email]" value="<?php echo isset($post_data['email'])?htmlspecialchars($post_data['email']):'';?>" placeholder="Địa chỉ email của bạn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="data[notes]" placeholder="Nội dung" id="text-message" cols="30" rows="10" placeholder="Nội dung"><?php echo isset($post_data['content'])?htmlspecialchars($post_data['content']):'';?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="captcha">
                                                <div id="">

                                                    <img src="frontend/contact/captcha" class="img-capcha" title="Mã xác nhận" alt="Mã xác nhận"/>
                                                    <input type="text" name="txtCaptcha" value="" class="input-capcha" placeholder="Mã xác nhận" style="max-width: 160px;" />

                                                </div>

                                            </div>
                                        </div>
                                        <div class="submit">
                                            <input type="submit" class="btn btn-primary" name="sent" value="Gửi thông tin" style="color: #000;">
                                        </div>
                                    </form>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>