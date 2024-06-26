<?php 
/*
Template Name: Single Post
*/
get_header('4');
?>

<div id="barba-wrapper">
    <div class="barba-container">
        <div data-scroll-container>
            <main id="main">


                <div class="header_animate" data-scroll-section>
                    <section class="section small-pb section__header section_third">
                        <div class="q-container container-inner">
                            <div class="columns short_container">
                                <div class="column menu_fade">
                                    <h1 data-splitting>
                                        <?php _e(get_the_title()); ?>
                                    </h1>
                                    <span class="font_caps"><span class="reveal_short"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">/
                                                Blog</a> &mdash; Insight:
                                            <?php _e(get_the_category()[0]->name); ?>
                                        </span></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php if (has_post_thumbnail( $post->ID ) ): 
                         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                                    ?>
                    <section class="section no-p scrollanim_clip">
                        <div class="full_banner">
                            <div class="image_opacity">
                                <picture>
                                    <source type="image/webp" srcset="<?php echo $image[0];?>">
                                    <img src="<?php echo $image[0];?>" data-scroll data-scroll-speed="-4"
                                        alt="<?php _e(get_the_title()); ?>">
                                </picture>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>
                </div>

                <section class="section white" data-scroll-section>
                    <div class="q-container container-inner">
                        <div class="columns">
                            <div class="column journal_article menu_fade">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </section>

                <?php  $prev_post = get_adjacent_post(false, '', true);
                        $next_post = get_adjacent_post(false, '', false);  
                        if(!empty($prev_post) || !empty($next_post))  {                    
                        ?>
                <section class="section no-pt grey motion_hover" data-scroll-section>

                    <div class="q-container container-inner">
                        <div class="columns">
                            <div class="column menu_fade">

                                <ol class="journal-list next_prev motion_hover_container">
                                    <?php 
                                    if(!empty($next_post)) {   
                                         if (has_post_thumbnail( $next_post->ID ) ): 
                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id(  $next_post->ID ), ); 
                                         endif;                                          
                                        ?>
                                        <li class="journal-thumbnail-container link">
                                        <div>
                                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="hover-target">
                                                <div class="label">
                                                    <span class="indicator font_caps">Next</span>
                                                    <h4> <?php _e(get_the_title($next_post->ID)); ?></h4>
                                                    <p>
                                                    <?php  _e(get_the_excerpt($next_post->ID)); ?>
                                                    </p>
                                                    <span class="more">+</span>
                                                </div>
                                            </a>
                                        </div> 
                                        <img width="100px" height="100px" class="motion_hover__img" src="<?php echo $image[0]; ?>"alt="<?php _e(get_the_title($next_post->ID)); ?>" />                                      
                                    </li>

                                    <?php   }

                                    if(!empty($prev_post)) {
                                        if (has_post_thumbnail($prev_post->ID) ): 
                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($prev_post->ID ), [100,100]);
                                        endif;
                                     ?>
                                    <li class="journal-thumbnail-container link">
                                        <div>
                                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="hover-target">
                                                <div class="label">
                                                    <span class="indicator font_caps">Prev</span>
                                                    <h4>                                                         
                                                    <?php _e($prev_post->post_title); ?>
                                                    </h4>
                                                    <p>
                                                        <?php _e(get_the_excerpt($prev_post->ID));  ?>
                                                    </p>
                                                    <span class="more">+</span>
                                                </div>
                                            </a>
                                        </div>  
                                        <img width="100px" height="100px" class="motion_hover__img" alt="<?php _e(get_the_title($prev_post->ID)); ?>" src="<?php echo $image[0]; ?>" alt="<?php _e(get_the_title($prev_post->ID)); ?>" />                                                                     
                                    </li>
                                    <?php  } ?>

                                </ol>

                                <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="magnet center">All Posts <span
                                        class="magnet_circle"><span class="magnet_arrow">&#8594;</span></span></a>

                            </div>
                        </div>
                    </div>

                </section>

<?php } ?>
            </main>
            <?php
get_footer('2');