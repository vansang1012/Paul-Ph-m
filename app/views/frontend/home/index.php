   
    <h1 class="h1-main">Doanh nhân PAUL PHẠM  - PAUL GROUP</h1>

    
<section class="home-slide">
    <div class="home-slide-img">
        <div class="item">
            
    <div class="wrap-img-cover">
        <?php $slide = $this->db->select('*')->from('slide')->where('publish = 1')->order_by('order asc')->limit(1)->get()->row_array(); ?>
        <picture>
            <source media="(max-width: 767px)">
            <img src="<?php echo $slide['image']; ?>" alt="Slide trên trang chủ">
        </picture>
    </div>

            <div class="arrow-down">
                <div class="icon-arrow"></div>
            </div>
        </div>
    </div>
</section>



    <section id="about" class="sec sec-about bg-light">
        <div class="container">
            <div class="sec-title">
                <h3 class="sub-title">Doanh nhân</h3>
                <h2 class="title"><?php echo $this->system['meta_keywords']; ?></h2>
                <div class="separator"></div>
                <p class="desc">
                    <div style="text-align: justify;"><?php echo $this->system['meta_description']; ?></div>
                </p>
            </div>
        </div>
    </section>

    <section class="sec sec-news">
        <div class="container">
            <div class="row">
                
                
                
                    <div class="col-sm-6 col-xs-12">
                        <div class="sec-title">
                            <h2 class="title">Dự Án</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="sec-content">
                            <div class="news news-list">
                     <?php $project = $this->db->select('*')->from('articles_item')->where(array('publish'=>1, 'parentid'=>10))->order_by('created desc')->limit(3)->get()->result_array(); ?>
                     <?php if(isset($project) && count($project)){ foreach ($project as $key => $value) {?>
                               
                    <div class="item">
                        <div class="flex">
                            <div class="left">
                                <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                    <div class="wrap-img-cover">
                                        <img class="lazyload" data-src="<?php echo helper_string_image(800,600,$value['image']); ?>" alt="<?php echo $value['title']; ?>" />
                                    </div>
                                </a>
                            </div>
                            <div class="right">
                                <div class="content">
                                    <div class="wrap-title">
                                        <span class="news-time"><?php $time = ($value['updated'] != '0000-00-00 00:00:00')?$value['created']:$value['created']; ?>
                                            <?php echo gmdate('d/m/Y', strtotime($time) + 7*3600)?></span>
                                        <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                            <h3 class="title"><?php echo $value['title'] ?></h3>
                                        </a>
                                    </div>
                                    <p class="desc">
                                        <?php echo helper_string_cutnchar(strip_tags($value['description']),200); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                  <?php }} ?> 
                
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-sm-6 col-xs-12">
                        <div class="sec-title">
                            <h2 class="title">Đào Tạo</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="sec-content">
                            <div class="news news-list">
                                
                                <?php $project = $this->db->select('*')->from('articles_item')->where(array('publish'=>1, 'parentid'=>9))->order_by('created desc')->limit(3)->get()->result_array(); ?>
                                 <?php if(isset($project) && count($project)){ foreach ($project as $key => $value) {?>
                               
                    <div class="item">
                        <div class="flex">
                            <div class="left">
                                <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                    <div class="wrap-img-cover">
                                        <img class="lazyload" data-src="<?php echo helper_string_image(800,600,$value['image']); ?>" alt="<?php echo $value['title']; ?>" />
                                    </div>
                                </a>
                            </div>
                            <div class="right">
                                <div class="content">
                                    <div class="wrap-title">
                                        <span class="news-time"><?php $time = ($value['updated'] != '0000-00-00 00:00:00')?$value['created']:$value['created']; ?>
                                            <?php echo gmdate('d/m/Y', strtotime($time) + 7*3600)?></span>
                                        <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                            <h3 class="title"><?php echo $value['title'] ?></h3>
                                        </a>
                                    </div>
                                    <p class="desc">
                                        <?php echo helper_string_cutnchar(strip_tags($value['description']),200); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                  <?php }} ?> 
                
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>

    <section class="sec sec-video bg-light">
        <div class="container">
            <div class="sec-title">
                <h2 class="title">Video</h2>
                <div class="separator"></div>
            </div>
            <div class="sec-content">
                <div class="video-list">
                    <div class="row">
                            <?php $video= $this->db->select('*')->from('articles_item')->where(array('publish'=>1,'parentid'=>11))->order_by('created desc')->limit(6)->get()->result_array(); ?>
                            <?php if(isset($video) && count($video)){ foreach ($video as $key => $value) {?>
                               
                        
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                    <div class="item">
                                        <div class="wrap-img-cover">
                                            <img class="lazyload" data-src="<?php echo helper_string_image(800,600,$value['image']); ?>" alt="<?php echo $value['title']; ?>"/>
                                        </div>
                                        <div class="content">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            <h3 class="title"><?php echo $value['title']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }} ?>
                        
              
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-intro has-bg-src" data-bg-src="template/frontend/Images/1.jpg">
        <div class="item">
            <div class="container">
                <div class="content">
                    <div class="space"></div>
                    <div class="body">
                        <h3 class="title"></h3>
<h3 style="text-align: justify;"><span style="font-size: 32px;">DOANH NHÂN PAUL PHẠM</span></h3>
<strong>
<div style="text-align: justify;"><strong>Nhà sáng lập, điều hành PAUL GROUP </strong></div>
</strong>
<div style="text-align: justify;">Thành công của PAUL GROUP hôm nay không phải tự nhiên sinh ra, cũng không phải do một cá nhân gây dựng, mà là thành quả tâm huyết, sự nỗ lực không ngừng của toàn thể thành viên PAUL GROUP chung tay góp sức.</div>
<div style="text-align: center;">
<div style="text-align: left;"></div>
</div>
<p class="desc">
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec-why has-bg-src" data-bg-src="template/frontend/Images/banner-mid.jpg">
        <div class="container">
            <div class="sec-content">
                <div class="why">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 wow fadeInLeft">
                            <div class="item">
                                <div class="number">30</div>
                                <h3 class="title">năm kinh nghiệm</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 wow fadeInUp">
                            <div class="item">
                                <div class="number">5</div>
                                <h3 class="title">chuyên môn</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 wow fadeInUp">
                            <div class="item">
                                <div class="number">150</div>
                                <h3 class="title">nhân sự</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 wow fadeInRight">
                            <div class="item">
                                <div class="number">945</div>
                                <h3 class="title">học viên</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<section class="sec sec-testi has-bg-src" data-bg-src="template/frontend/Images/banner-partner.jpg">
    <div class="container">
        <div class="sec-title sec-text-light">
            <h3 class="sub-title">Người ảnh hưởng nói gì về</h3>
            <h2 class="title">Doanh nhân <span class="br"><?php echo $this->system['meta_title']; ?></span></h2>
            <div class="separator"></div>
        </div>
        <div class="sec-content">
            <div class="row slider slider-fluid testi">
    <?php $comment= $this->db->select('*')->from('ykien')->where('publish = 1')->order_by('created desc')->limit(3)->get()->result_array(); ?>
    <?php if(isset($comment) && count($comment)){ foreach ($comment as $key => $value) {?>
              
    <div class="col-md-12">
        <div class="item">
            <div class="row">
                <div class="col-xs-3">
                    <div class="item-img">
                        <div class="wrap-img-cover">
                            <img class="lazyload" data-src="<?php echo helper_string_image(800,600,$value['image']); ?>" alt="<?php echo $value['fullname']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="content">
                        <p class="desc">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <?php echo $value['notes']; ?>
                        </p>
                        <div class="author"><?php echo $value['fullname']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>
    

            </div>
        </div>
    </div>
</section>
