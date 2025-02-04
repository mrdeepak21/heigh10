<?php 
/*
Template Name: Case Studies
*/
get_header('4');

$i=1;
$data_color = ['#EAF8FF','#FFD5C2','#FFDBAF','#CAD9E9'];
$data_bg = ['#102F4B','#2C1F19','#2E2A24','#232A33'];
$data_col = ['#79B4D3','#B98C76','#B0987B','#7C95B7'];


    $posts = new WP_Query([ 'post_type' => 'work',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'ID', 
    'order' => 'ASC']); 
?>

<div id="barba-wrapper">
    <div class="barba-container">
        <div data-scroll-container>
            <main id="main">
                <div class="header_animate" data-scroll-section>
                    <section class="section section__header work_images large-pb bg__change img_brightness">
                        <div class="q-container container-inner large-pb">
                            <div class="columns short_container">
                                <div class="column menu_fade no-p" data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3"
                                style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0;">
                                <h6 class="font_caps">/ Our Work</h6>
                                    <h1 class="lead">Our work drives <span class="long-gradient">adoption, engagement, and conversions</span>
                                    </h1>
                                </div>
                            </div>

                        </div>
                        
                        <div class="offset_banner" style="background-color:#000">
                            <div class="image_reveal">
                                <picture>
                                    <source type="image/webp"
                                        srcset="https://heigh10.com/wp-content/uploads/2023/03/work-banner.jpg">
                                    <img data-scroll data-scroll-speed="-3"
                                        src="https://heigh10.com/wp-content/uploads/2023/03/work-banner.jpg"
                                        alt="">
                                </picture>
                                <div class="cover"></div>
                            </div>
                        </div>

                        <div class="q-container container-inner menu_fade">

                            <?php while ($posts->have_posts() ) : $posts->the_post(); 
                            $is_odd = $i%2==0?false:true;
                            _e($is_odd?'<div class="columns">':null);
                            ?>

                                <div class="column q-1-2">                                    
                                    <a href="<?php the_permalink(); ?>" data-scroll <?php echo !$is_odd?'data-scroll-speed="-2"':null; ?> data-color="<?php echo $data_color[$i-1]?$data_color[$i-1]:'#EAF8FF'; ?>" data-bg="<?php echo $data_bg[$i-1]?$data_bg[$i-1]:'#102F4B'; ?>" 
                                        data-hover="View" data-col="<?php echo $data_col[$i-1]?$data_col[$i-1]:'#79B4D3'; ?>">
                                        <div class="half_image image_zoom_wrapper">
                                            <div class="image_zoom">
                                                <?php if (has_post_thumbnail( $post->ID ) ): 
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                                    ?>
                                                <picture>
                                                    <source type="image/jpg"
                                                        srcset="<?php echo $image[0]; ?>">
                                                    <img class="banner_img" data-scroll data-scroll-speed="-4"
                                                        src="<?php echo $image[0]; ?>"
                                                        alt="">
                                                </picture>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="work_caption">
                                            <span class="client"><?php _e(get_the_title()); ?></span>
                                            <span class="line_sep"></span>
                                        </div>
                                        <h4><?php _e( get_the_excerpt(),'heigh10'); ?></h4>
                                        <p class="desc"><?php _e(get_post_meta( $post->ID , 'work_fields',true),'heigh10'); ?></p>
                                    </a>
                                </div>
                                <?php
                                _e(!$is_odd?' </div>':null);
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                        </div>
                    </section>

                </div>
            </main>
                <?php
get_footer('2');