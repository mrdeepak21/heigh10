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
                                        <p class="">
                                           <?php  foreach ($our_fields as $fields) {
                                                echo "<span>$fields</span>";
                                            } ?>
                                            
                                        </p>
                                    </div>

                                </div>
                <div class="column q-2-3">
                    <p class="lead" data-splitting><?php echo the_content(); ?><br><br></p>
                    <a href="mailto:<?php echo get_theme_mod('get_in_touch'); ?>" class="magnet">Get in touch <span class="magnet_circle"> <span class="magnet_arrow">&#8594;</span></span></a>
                </div>
            </div>
        </div>
    </section>

                    </main>
<?php
}
get_footer('2');