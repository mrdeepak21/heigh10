<?php 
/*
Template Name: Home Page
*/
get_header('4');
?>
<div id="barba-wrapper">
    <div class="barba-container">
        <div data-scroll-container="">
            <main id="main">
                <div data-scroll-section>
                    <div id="slideshow" parallax=".1" data-scroll-sticky>
                        <div class="slideshow-inner header_animate" data-scroll="" data-scroll-speed="-9">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <section class="section overflow_hide" data-scroll-section="">
                    <div class="q-container container-inner menu_fade reveal scrollanim_intro">
                        <div class="columns short_container" style="padding:0">
                            <div class="column">
                                <div data-scroll="" data-scroll-speed="-8.5" data-scroll-offset="-100%,-100%">
                                    <div class="cc-short">
                                        <div class="c-txt-wrapper">
                                            <h6 class="font_caps">/ Introduction</h6>
                                            <h2 style="font-size:4.5vw">We produce world-class digital
                                                experiences for industry-leading <span class="long-gradient">brands and
                                                    small businesses in the heart of Silicon Valley.</span></h2>
                                        </div>
                                        <div style="display: flex; justify-content: space-between;align-items: center;">
                                            <a data-w-id="96fbbb74-ce84-3c79-6e1c-84ff9df337f7"
                                                style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                                                href="<?php echo site_url(); ?>/expertise/"
                                                class="c-button outlined white mrg-tp w-inline-block">
                                                <h3 class="c-button__txt">Explore Our Expertise</h3><img
                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                                                    loading="lazy" alt="right arrow inside circle"
                                                    class="c-button--arrow">
                                            </a>
                                            <div class="ornament" data-scroll="" data-scroll-speed="0.3"
                                                data-scroll-offset="-100%,-200%"><img
                                                    src="<?php bloginfo('template_directory'); ?>/assets/images/ornament.svg"
                                                    alt="Fleava Ornament"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section no-pt motion_hover bg__change" data-scroll-section=""
                    style="color: #000;background-color: #ccc;padding: 10vw 0 50px 0;">
                    <div class="works-content c-grid-block__p5"
                        id="w-node-_1ac42f95-5d16-7462-9489-4a5187620921-511400ed">
                        <div>
                            <div class="works-head">
                                <div class="works-head-left">
                                    <h6 class="font_caps">/ Featured Work</h6>
                                    <h2 class="c-headline cc-home">We create industry-specific
                                        <span class="c-headline gradient-pink cc-home"> digital experiences unique to
                                            each project</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="works-list">
                            <?php
                            $i=1;
                                $posts = new WP_Query([ 'post_type' => 'work',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
                                'orderby' => 'ID', 
                                'order' => 'ASC']);                                     
                                while ($posts->have_posts() ) : $posts->the_post();  ?>
                            <a class="thumbnail-container <?php echo $i%2==0?'even':'undefined'; ?>"
                                href="<?php the_permalink(); ?>">
                                <div>
                                    <div class="image-container show">
                                        <div class="image-wrapper">
                                            <div class=" gatsby-image-wrapper"
                                                style="position: relative; overflow: hidden;">
                                                <div aria-hidden="true" style="width: 100%; padding-bottom: 133.571%;">
                                                </div>
                                                <?php if (has_post_thumbnail( $post->ID ) ): 
                         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                                    ?>
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="<?php echo $image[0]; ?>?w=140&amp;h=187&amp;q=90&amp;fm=webp 140w,
                    <?php echo $image[0]; ?>?w=280&amp;h=374&amp;q=90&amp;fm=webp 280w,
                    <?php echo $image[0]; ?>?w=560&amp;h=748&amp;q=90&amp;fm=webp 560w,
                    <?php echo $image[0]; ?>?w=840&amp;h=1122&amp;q=90&amp;fm=webp 840w"
                                                        sizes="(max-width: 560px) 100vw, 560px">
                                                    <source
                                                        srcset="<?php echo $image[0]; ?>?w=140&amp;h=187&amp;q=90 140w,
                    <?php echo $image[0]; ?>?w=280&amp;h=374&amp;q=90 280w,
                    <?php echo $image[0]; ?>?w=560&amp;h=748&amp;q=90 560w,
                    <?php echo $image[0]; ?>?w=840&amp;h=1122&amp;q=90 840w"
                                                        sizes="(max-width: 560px) 100vw, 560px"><img
                                                        sizes="(max-width: 560px) 100vw, 560px"
                                                        srcset="<?php echo $image[0]; ?>?w=140&amp;h=187&amp;q=90 140w,
                    <?php echo $image[0]; ?>?w=280&amp;h=374&amp;q=90 280w,
                    <?php echo $image[0]; ?>?w=560&amp;h=748&amp;q=90 560w,
                    <?php echo $image[0]; ?>?w=840&amp;h=1122&amp;q=90 840w"
                                                        src="<?php echo $image[0]; ?>?w=560&amp;q=90"
                                                        alt="" loading="lazy"
                                                        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                                </picture>
                                                <noscript>
                                                    <picture>
                                                        <source type='image/webp'
                                                            srcset="<?php echo $image[0]; ?>?w=140&h=187&q=90&fm=webp 140w,
                    <?php echo $image[0]; ?>?w=280&h=374&q=90&fm=webp 280w,
                    <?php echo $image[0]; ?>?w=560&h=748&q=90&fm=webp 560w,
                    <?php echo $image[0]; ?>?w=840&h=1122&q=90&fm=webp 840w"
                                                            sizes="(max-width: 560px) 100vw, 560px" />
                                                        <source srcset="<?php echo $image[0]; ?>?w=140&h=187&q=90 140w,
                    <?php echo $image[0]; ?>?w=280&h=374&q=90 280w,
                    <?php echo $image[0]; ?>?w=560&h=748&q=90 560w,
                    <?php echo $image[0]; ?>?w=840&h=1122&q=90 840w"
                                                            sizes="(max-width: 560px) 100vw, 560px" /><img
                                                            loading="lazy" sizes="(max-width: 560px) 100vw, 560px"
                                                            srcset="<?php echo $image[0]; ?>?w=140&h=187&q=90 140w,
                    <?php echo $image[0]; ?>?w=280&h=374&q=90 280w,
                    <?php echo $image[0]; ?>?w=560&h=748&q=90 560w,
                    <?php echo $image[0]; ?>?w=840&h=1122&q=90 840w"
                                                            src="<?php echo $image[0]; ?>?w=560&q=90"
                                                            alt=""
                                                            style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                                    </picture>
                                                </noscript>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">
                                    <?php 
                                    $logo_link = get_post_meta( $post->ID , 'logo_link',true);
                                    if($logo_link!=="") {  ?>
                                  <div class="project_logo">  <img src="<?php echo site_url( $logo_link ); ?>"/> </div>
                                    <?php } else { ?>
                                    <h3 class="type-sub2 project-title"><?php _e(the_title()); ?></h3>
                                    <?php } ?>
                                    <div class="type-sub3 animation animation-appear"><?php echo get_post_meta( get_the_ID(), 'work_fields', true); ?></div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                        </div>
                        <div>
                        </div>

                    </div>

                    <div data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3"
                        style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                        class="positions_head">
                        <div class="button_holder">
                            <a data-w-id="96fbbb74-ce84-3c79-6e1c-84ff9df337f7"
                                style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                                href="<?php echo site_url(); ?>/work/"
                                class="c-button outlined black is-flex w-inline-block">
                                <h3 class="c-button__txt"> View More Work</h3><img
                                    src="<?php bloginfo('template_directory'); ?>/assets/images/black-arrow.svg"
                                    loading="lazy" alt="right arrow inside circle" class="c-button--arrow">
                            </a>
                        </div>
                    </div>
                </section>
            </main>
            <?php
get_footer('2');