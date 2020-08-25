<div class="wrap-breadcrumb has-bg-src" data-bg-src="">
    <!-- <img src="assets/images/bg-breadcrumb.jpg" alt="breadcrumb images"> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class='breadcrumb-item'><a href='\' title='Trang chủ'>Trang chủ</a></li><li class='breadcrumb-item'><a href='<?php echo helper_string_alias($category['
            title']).'-c'.$category['id'].CMS_SUFFIX; ?>'><?php echo $category['title']; ?></a></li><li class='breadcrumb-item'><?php echo $item['title']; ?></a></li>
        </ol>
    </nav>
</div>
<!-- end breadcrumb -->
    <section class="sec page-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 left">
                    <div class="box main-content">
                        <div class="top-info">
                            <h1 class="title"><?php echo $item['title']; ?></h1>
                            <span class="news-time"><?php $time = ($item['updated'] != '0000-00-00 00:00:00')?$item['created']:$item['created']; ?>
                                            <?php echo gmdate('d/m/Y', strtotime($time) + 7*3600)?></span>
                            <div class="quote">
                                <span>
                                    <?php echo $item['description']; ?>
                                </span>
                            </div>

                        </div>
                        <div class="body page-detail-body">
                            
                            <div style="text-align: justify;"><?php echo $item['content']; ?></div>
                        </div>

                            
               
                    </div>
                </div>
                <div class="col-lg-3 right">
                    <div class="box related-post">
                        <h3 class="box-title">Bài viết liên quan</h3>
                        <div class="news">
                            
                            <?php $articles= $this->db->select('*')->from('articles_item')->where(array('publish'=>1,'parentid'=>$category['id']))->order_by('created desc')->limit(5)->get()->result_array(); ?>
                            <?php if(isset($articles) && count($articles)){ foreach ($articles as $key => $value) { ?>
                                

                                <div class="item">
                                    <div class="flex">
                                        <div class="left">
                                            <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                                <div class="wrap-img-cover">
                                                    <img class="lazyload" data-src="<?php echo helper_string_image(800,450,$value['image']); ?>" alt="<?php echo $value['title']; ?>"/>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <div class="content">
                                                <div class="wrap-title">
                                                    <span class="news-time"><?php $time = ($value['updated'] != '0000-00-00 00:00:00')?$value['created']:$value['created']; ?>
                                            <?php echo gmdate('d/m/Y', strtotime($time) + 7*3600)?></span>
                                                    <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>" title="<?php echo $value['title']; ?>">
                                                        <h3 class="title"><?php echo $value['title']; ?></h3>
                                                    </a>
                                                </div>
                                                <p class="desc">
                                                    <?php echo helper_string_cutnchar(strip_tags($value['description']),50); ?>
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
