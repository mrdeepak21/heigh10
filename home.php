<?php 
/*
Template Name: Post Archieve
*/
get_header('4');
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
                                    <picture>
                                        <source type="image/webp" srcset="https://heigh10.com/wp-content/uploads/2023/03/expertise-user-interface.jpg">
                                        <img src="https://heigh10.com/wp-content/uploads/2023/03/expertise-user-interface.jpg"
                                            alt="Blog" data-scroll
                                            data-scroll-speed="-7">
                                    </picture>
                                </div>
                            </div>
                            <div class="banner-overlay"></div>
                            <div class="q-container container-inner">
                                <div class="columns short_container">
                                    <div class="column menu_fade" data-scroll data-scroll-speed="-9">
                                        <a href="#" data-hover="Blog" data-col="#878B93">
                                            <h6 class="font_caps" data-splitting>/ <?php _e(wp_title('',false,'right')); ?></h6>
                                            <h1 data-splitting>What's New</h1>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section no-pt light-grey motion_hover" data-scroll-section>

                        <div class="q-container container-inner">
                            <div class="columns">
                                <div class="column menu_fade">

                                    <ol class="journal-list">

                                        <li>
                                            <p class="font_caps">/ Latest Posts</p>
                                        </li>
                                        <!-- /////////////// NEW BLOGS /////////////// -->

                                        <?php
                           
                                $posts = new WP_Query([ 'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
                                'orderby' => 'ID', 
                                'order' => 'DESC']);  
                                if (have_posts()) {                                 
                                while ($posts->have_posts() ) : $posts->the_post();  ?>


                                        <li class="journal-thumbnail-container link">
                                            <div>
                                                <a href="<?php the_permalink(); ?>"
                                                    class="hover-target">
                                                    <div class="label">
                                                        <h4><?php _e(get_the_title()); ?></h4>
                                                        <p>
                                                        <?php _e(get_the_excerpt()); ?>  <span class="more">+</span>
                                                            <span class="category font_caps">/ <?php _e(get_the_category()[0]->name); ?></span>
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                         
                                        </li>


                                        
                                        <?php
                           
                        endwhile;
                                } else {
                                       ?>
                                       <li>
                                    <p><?php _e('Nothing found here!');  ?></p>
                                       </li>
                                       <?php                             }
                        wp_reset_postdata();
                        ?>
                        <!-- /////////////// END NEW BLOGS /////////////// -->
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </section>
                </main>                
<?php
get_footer('2');