<?php 
/*
Template Name: Single Expertise
*/
get_header('4');
$slug = explode('/',$_SERVER['REQUEST_URI']);
$page_title = $slug[array_key_last($slug)-1];
$query = get_posts( [
    'post_type'=>'expertise',
    'name'=>$page_title,
    'post_status'=>'published',
    'numberposts' => 1
]);

if($query){
    $our_fields = get_post_custom_values('our_fields');
    $our_fields =  $work_fields = explode(',',$our_fields[0]);
?>
           <div id="barba-wrapper">
            <div class="barba-container">
                <div data-scroll-container>
                    <main id="main">                        

                        <section class="section no-p" data-scroll-section>
                            <div
                                class="full_banner mobile_bottom align_bottom long header_animate scrollanim_fade_container">
                                <div class="image_opacity">
                                    <div class="scrollanim_fade">
                                        <picture class="bg_img">                                       
                                            <source type="image/jpg" srcset="<?php echo get_the_post_thumbnail_url(get_the_ID( ),'full'); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID( ),'full'); ?>" data-scroll
                                                data-scroll-speed="-7"
                                                alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="banner-overlay"></div>
                                <div class="q-container container-inner">
                                    <div class="columns menu_fade short_container">
                                        <div class="column" data-scroll data-scroll-speed="-9" style="color: #EAF8FF">
                                        <span class="font_caps"><span class="reveal_short"><a href="<?php echo site_url(); ?>/expertise/">/
                                        Expertise</a> &mdash; <?php echo the_title(); ?> </span></span>
                                        <h1><?php echo $query[0]->post_excerpt; ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

    <section class="section work_details no-pb" data-scroll-section>
        <div class="q-container container-inner scrollanim_intro">
            <div class="columns menu_fade" data-scroll data-scroll-speed="-8.5"
                data-scroll-offset="-100%,-100%" style="align-items: baseline;">
            <div class="column q-1-3">
                                    <div class="work_info">
                                        <ul class="exp">
                                           <?php  foreach ($our_fields as $fields) {
                                                echo "<li>$fields</li>";
                                            } ?>
                                            
                                        </ul>
                                    </div>

                                </div>
                <div class="column q-2-3">
                    <p class="lead"><?php echo the_content(); ?></p>
                   

                    <a data-w-id="96fbbb74-ce84-3c79-6e1c-84ff9df337f7"
                                                style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                                                href="mailto:<?php echo get_theme_mod('get_in_touch'); ?>" 
                                                class="c-button outlined white mrg-tp w-inline-block">
                                                <h3 class="c-button__txt">Get in Touch</h3><img
                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                                                    loading="lazy" alt="Get in Touch"
                                                    class="c-button--arrow">
                                            </a>

                </div>
            </div>
        </div>
    </section>

                    </main>
<?php
}
get_footer('2');