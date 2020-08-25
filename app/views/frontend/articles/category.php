<!-- breadcrumb -->
<div class="wrap-breadcrumb has-bg-src" data-bg-src="">
    <?php $slide = $this->db->select('*')->from('slide')->where('publish = 1')->order_by('created desc')->get()->row_array(); ?>
    <!-- <img src="<?php echo $slide['image']; ?>" alt="breadcrumb images"> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class='breadcrumb-item'><a href='<?php echo helper_string_alias($category['title']).'-c'.$category['id'].CMS_SUFFIX; ?>' title='Trang chủ'>Trang chủ</a></li><li class='breadcrumb-item active'><h1><?php echo $category['title'] ?></h1></li>
        </ol>
    </nav>
</div>
<!-- end breadcrumb -->
    <section class="sec page-news">
        <div class="container">
            <div class="sec-content">
                
                <div class="news news-list js-append-data">
                    <?php if(isset($list) && count($list)){ foreach ($list as $key => $value) {?>
                       
                    <div class="item">
                        <div class="flex">
                            <div class="left">
                                <a href="<?php echo helper_string_alias($value['title']).'-a'.$value['id'].CMS_SUFFIX; ?>">
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
                                            <h3 class="title"><?php echo $value['title']; ?></h3>
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
                <?php if(isset($pagination) && !empty($pagination) && count($pagination)){ ?>
                    <div class="pagination">
                        <?php echo helper_string_pagination_frontend($pagination, $total_rows, 'Trang'); ?>
                        <div class="clear-both"></div>
                    </div>
                    <?php } ?>
                <div class="wrap-more">
                    
                </div>
            </div>
        </div>
    </section>