<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="box link logo">
                        <ul class="content">
                            <li>
                                <a href="\" title="<?php echo $this->system['meta_title']; ?>">
                                    <h3 class="logo-text body-fontfamily"><?php echo $this->system['meta_title']; ?></h3>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->system['map']; ?>" target="_blank">
                                    <em class="fa fa-map-marker" aria-hidden="true"></em><?php echo $this->system['address']; ?>
                                    </a>
                                
                            </li>
                            <li><a href="tel:<?php echo $this->system['tuvan']; ?>"><em class="fa fa-phone" aria-hidden="true"></em><?php echo $this->system['tuvan'] ?></a>
                            </li>
                            <li><a href="mailto: <?php echo $this->system['email']; ?>"><em class="fa fa-envelope" aria-hidden="true"></em><?php echo $this->system['email']; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="box link">
                        <h2 class="box-title">Truy cập nhanh</h2>
                        <div class="content">
                            <ul class="">
                                 <?php $menu = $this->db->select('*')->from('articles_category')->where(array('publish'=>1,'parentid'=>1))->order_by('created asc')->limit(5)->get()->result_array(); ?>
                                <?php if(isset($menu) && count($menu)){ foreach ($menu as $key => $value) {?>
                                <li><a href='<?php echo helper_string_alias($value['title']).'-c'.$value['id'].CMS_SUFFIX; ?>' class=''><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $value['title']; ?></a> 
                                </li>
                            <?php }} ?>
                                <li><a href="#" type="button" data-toggle="modal" data-target="#contact"><i class="fa fa-angle-right" aria-hidden="true"></i>Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="box">
                        <h2 class="box-title">Mạng xã hội</h2>
                        <div class="content">
                            <div class="social">
                                <a href="<?php echo $this->system['facebook']; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook fb" aria-hidden="true"></i><?php echo $this->system['meta_keywords']; ?></a>
                                <a href="<?php echo $this->system['youtube']; ?>" target="_blank" title="Youtube"><i class="fa fa-youtube yt" aria-hidden="true"></i><?php echo $this->system['meta_keywords']; ?></a>
                                <a href="<?php echo $this->system['instagram']; ?>" target="_blank" title="Instagram"><i class="fa fa-instagram in" aria-hidden="true"></i><?php echo $this->system['meta_keywords']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="wrap-cr">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <p>&copy; 2020 -<a href="\" title="<?php echo $this->system['meta_keywords']; ?>">&nbsp;<?php echo $this->system['meta_keywords']; ?></a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <p class="design-by">Thiết kế và phát triển bởi<a href="https://icc.technology/" target="_blank" title="SweetSoft, công ty phần mềm chuyên nghiệp, thiết kế web tại Hà nội">&nbsp;ICC</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>