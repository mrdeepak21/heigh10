<?php 
/*
Template Name: Our Works - Individual
*/
get_header('4');
$slug = explode('/',$_SERVER['REQUEST_URI']);
$query = get_posts( [
    'post_type'=>'work',
    'name'=>$slug[array_key_last($slug)-1],
    'post_status'=>'published',
    'numberposts' => 1
]);

if($query){
    $web_link = get_post_custom_values('web_link');
    $work_fields = get_post_custom_values('work_fields');
    $work_fields = explode(',',$work_fields[0]);
    $next_link = get_post_custom_values('next_link');
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
                                        <span class="font_caps"><span class="reveal_short"><a href="<?php echo site_url(); ?>/work/">/
                                                    Work</a> &mdash; <?php echo the_title(); ?> </span></span>
                                        <h1><?php echo $query[0]->post_excerpt; ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="section work_details" data-scroll-section>
                        <div class="q-container container-inner ">
                            <div class="columns menu_fade" >
                                <div class="column q-1-3">
                                    <div class="work_info">
                                        <ul class="exp">
                                           <?php  foreach ($work_fields as $fields) {
                                                echo "<li>$fields</li>";
                                            } ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="column q-2-3">
                                    <div class=""><?php the_content(); ?></div>         
                                            <a data-w-id="96fbbb74-ce84-3c79-6e1c-84ff9df337f7"
                                                style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                                                href="<?php echo $web_link[0]; ?>" target="_blank" 
                                                class="c-button outlined white mrg-tp w-inline-block">
                                                <h3 class="c-button__txt">Visit Website</h3><img
                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                                                    loading="lazy" alt="Get in Touch"
                                                    class="c-button--arrow">
                                            </a>
                                </div>
                            </div>
                        </div>
                    </section>
<?php
wp_reset_query();
$next_post = get_posts( [
    'post_type'=>'work',
    'name'=>$next_link[0],
    'post_status'=>'published',
    'numberposts' => 1
]); if($next_post){ 
    $next_post = $next_post[0];
    ?>
                    <section class="section no-p work_footer" data-scroll-section>
                        <a href="<?php echo site_url()."/work/". $next_post->post_name ?>">
                            <div class="full_banner mobile_half mobile_bottom" data-hover="Next" data-col="#B98C76">
                                <div class="image_reveal">
                                    <picture class="bg_img">
                                        <source type="image/webp" srcset="<?php echo get_the_post_thumbnail_url($next_post->ID,'full'); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url($next_post->ID,'full'); ?>" data-scroll
                                            data-scroll-speed="-4"
                                            alt="">
                                    </picture>
                                </div>
                                <div class="q-container container-inner">
                                    <div class="columns short_container" data-scroll data-scroll-speed="-2">
                                        <div class="column menu_fade" style="color:#FFD5C2">
                                            <h6 class="font_caps">/ Next Project &mdash;<?php echo $next_post->post_title; ?></h6>
                                            <h2><?php echo($next_post->post_excerpt); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </section>
                    <?php } ?>
                </main>
<?php
}
get_footer('2');