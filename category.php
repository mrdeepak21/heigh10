<?php get_header('1'); ?>

<div class="container-fluid bg-blog pb-xl-5">
    <div class="row blog-list-header">
        <div class="col-xl-4 offset-xl-1 col-lg-7 offset-lg-1 col-md-10 offset-md-1">
            <h1 class="title mb-3 cpr-xl-5">Get Updates on the latest Technologies and Innovation</h1>
        </div>
        <!-- <div class="col-md-10 offset-md-1">
            <div class="card my-1 my-xl-5">
                <div class="card-body p-0">
                    <div class="row">

                        <div class="col-xl-6 order-xl-2">
                            <div data-bg="<?php bloginfo('template_directory'); ?>/uploads/2020/05/Flynaut.png"
                                class="bg-blog1 rocket-lazyload entered lazyloaded"
                                style="background-image: url('<?php bloginfo('template_directory'); ?>/uploads/2020/05/Flynaut.png');"
                                data-ll-status="loaded"></div>
                        </div>
                        <div class="col-xl-6 p-3 py-xl-5 order-xl-1">
                            <a href="https://flynaut.com/blog/interview-with-flynauts-ceo-shadab-rashid/">
                                <div class="p-3 p-md-4 p-xl-5">
                                    <div>
                                        <span class="line-title">Agency News</span>
                                        <span class="blog-date float-right">April 14, 2020 </span>
                                    </div>
                                    <h4 class="title-card mt-3">With Heigh10's CEO, the Firm
                                        Burgeons as One of the Best Mobile App Service Providers at GoodFirms</h4>
                                    <p class="desc mr-5"></p>
                                    <span class="read-more cursor-pointer">Read More</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row my-4">
        <div class="col-md-10 offset-md-1">
            <div class="row" id="latestBlog">
                <?php while(have_posts( )){ the_post( ); ?>
                <div class="col-xl-4 col-md-6 py-4 p-xl-2">
                    <div class="card blog-card"> <img class="card-img-top"
                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0]; ?>"
                            alt="<?php the_title(); ?>">
                        <div class="card-body "> <a
                                href="<?php the_permalink(); ?>">
                                <div> <span class="line-title">
                                        <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
                                    </span> <span class="blog-date float-right">
                                        <?php the_date(); ?>
                                    </span> </div>
                                <h4 class="title mt-3">
                                    <?php the_title(); ?>
                                </h4>
                                <p class="desc"></p> <span class="read-more">Read More</span>
                            </a> </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- <div class="col-md-12 text-center py-5">
            <div class="">
                <div class="loader blogloader mb-5 d-none">Loading...</div>
                <a href="javascript:void(0);" class="load-more loadmore showmoreblog">
                    Load More
                    <i class="fa fa-sort-desc d-block" aria-hidden="true"></i>
                </a>
            </div>
        </div> -->
    </div>
</div>

<?php get_footer();	