<div class="wrap-header">
    <header class="header header-desktop header-mobile">
        <div class="overlay" data-toggle="collapse" data-target="#myNavbar"></div>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header navbar-header-tyle1">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="top-mobile">
                        <a class="navbar-brand" href="\" title="<?php echo $this->system['meta_title']; ?>">
                            <img src="<?php echo $this->system['logo']; ?>" alt="" class="logo-default">
                            <img src="<?php echo $this->system['logo']; ?>" alt="" class="logo-scroll">
                        </a>
                        <div class="right">
                            <a href="tel:<?php  echo $this->system['tuvan']; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <a href="mailto:<?php   echo $this->system['email']; ?>" title="<?php   echo $this->system['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="flex">
                    <div class="logo">
                        <a href="\" title="<?php echo $this->system['meta_title']; ?>">
                            <img src="<?php  echo $this->system['logo']; ?>" alt="<?php echo $this->system['meta_title']; ?>" class="logo-default">
                            <img src="<?php  echo $this->system['logo']; ?>" alt="<?php echo $this->system['meta_title']; ?>" class="logo-scroll">
                        </a>
                    </div>
                    <div class="wrap-menu-desktop">
                        <div class="top-desktop">
                            <div class="left">
                                <a href="tel:<?php   echo $this->system['tuvan']; ?>" title="<?php   echo $this->system['tuvan']; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php   echo $this->system['tuvan']; ?></a>
                                <a href="mailto:<?php   echo $this->system['email']; ?>" title="<?php   echo $this->system['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php   echo $this->system['email']; ?></a>
                            </div>
                            <div class="right">
                                <a href="<?php   echo $this->system['facebook']; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php   echo $this->system['youtube']; ?>" target="_blank" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href='\' class=''>Trang chủ</a>
                                <?php $menu = $this->db->select('*')->from('articles_category')->where(array('publish'=>1,'parentid'=>1))->order_by('created asc')->limit(5)->get()->result_array(); ?>
                                <?php if(isset($menu) && count($menu)){ foreach ($menu as $key => $value) {?>
                                  
                            </li>
                            <li><a href='<?php echo helper_string_alias($value['title']).'-c'.$value['id'].CMS_SUFFIX; ?>' class=''><?php echo $value['title'] ?></a>
                            </li>
                                <?php }} ?>
                            </li>
                            <li class="wrap-btn"><a href="#" type="button" data-toggle="modal" data-target="#contact" class="btn btn-contact">Liên hệ</a></li>

                        </ul>
                    </div>
                    <div class="top-mobile">
                        <div class="right">
                            <a href="tel:<?php echo $this->system['tuvan']; ?>" title="<?php echo $this->system['tuvan']; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <a href="mailto:<?php echo $this->system['email']; ?>" title="<?php echo $this->system['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
<div id="contact" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-close" data-dismiss="modal">
                    <img src="template/frontend/Images/icon-close-white.png" alt="Close">
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
                                     <form action = "<?php echo CMS_URL; ?>" method="post" >
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group"> 
                                                    <input name="data[fullname]" type="text" value="<?php echo isset($post_data['fullname'])?htmlspecialchars($post_data['fullname']):'';?>" class="form-control validate[required]" placeholder="Họ tên của bạn *" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="data[email]" type="text" value="<?php echo isset($post_data['email'])?htmlspecialchars($post_data['email']):'';?>" class="form-control validate[required,custom[email]]" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="data[notes]" id="ctl00_Header1_ModalContact1_txtContent" class="form-control validate[required]" rows="5" placeholder="Lời nhắn *"><?php echo isset($post_data['content'])?htmlspecialchars($post_data['content']):'';?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="captcha">
                                                <div id="ctl00_Header1_ModalContact1_Captcha1_upnlCaptCha">

                                                    <img src="frontend/contact/captcha" class="img-capcha" title="Mã xác nhận" alt="Mã xác nhận" style="margin-top:19px;" />
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