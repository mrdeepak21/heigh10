<?php

/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Heigh10
 */


get_header();
the_post();
?>

<main class="wrapper">
    <section id="videos-wrapper" data-w-id="2471157c-ace6-4b6a-b0ea-3212755ec3c7" class="l-hero home wf-section">
        <div class="w-layout-grid c-hero__grid2">
            
            <div id="w-node-_2471157c-ace6-4b6a-b0ea-3212755ec3ca-511400ed" class="c-grid-block__p5 cc--home-hero">                
                <div data-w-id="2471157c-ace6-4b6a-b0ea-3212755ec3cb"
                    style="-webkit-transform:translate3d(0, 3em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 4deg);-moz-transform:translate3d(0, 3em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 4deg);-ms-transform:translate3d(0, 3em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 4deg);transform:translate3d(0, 3em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 4deg);opacity:0"
                    class="c-hero--statement">
                    <h6 class="font_caps" data-splitting>/ Digital Agency</h6>
                    <h1 class="c-hero--txt">We help businesses <span class="c-hero--txt is--large long-gradient">launch and grow
                        through digital innovation.</span> </h1> 
                </div> <a data-w-id="f4d63999-cb65-7d75-e5f3-75b2b06cc970"
                    style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 2deg);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 2deg);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 2deg);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(null, 2deg);opacity:0"
                    href="<?php echo site_url(); ?>/contact-us" class="c-button no-outlined white-border mrg-tp hero w-inline-block">
                    <h2 class="c-button__txt">Let's Collaborate</h2><img
                        src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                        loading="lazy" alt="right arrow inside circle" class="c-button--arrow">
                </a>
            </div>
            
        </div>
        <!-- <div class="d_fixed_position_wrapper new">
            <div id="video-modal-holder" class="vimeo-wrapper hidden">
                <div id="video-content" class="c-ctn cc-centered-content video-holder">
                    <div id="reel-container" class="c-reel new">
                        <div class="em_video w-embed">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <video preload="none" id="reel-video" loop="loop"
                                    src="https://player.vimeo.com/external/496374984.hd.mp4?s=88723241ff90ddc2591cdce67024920fb0cee4c9&profile_id=175">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="video-close" class="d_close_video new">
                    <div>
                        Close
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section data-w-id="b1610442-27d1-5dc9-fbb1-9b384f7af97f" class="l-section cc--dark wf-section">
        <div class="c-grid-wrapper">
            <div class="w-layout-grid c-your-brand__grid">
                <div class="c-your-brand__graphic">
                    <div class="c-your-brand__gradient-overlay">
                  
                    </div>
                    <img src="data:image/png;base64,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" class="anim-logo">
        
                    <div data-w-id="ad71be2e-72e9-ccd6-e0f3-162960fec76c" data-is-ix2-target="1" class="c-grpahic-temp"
                        data-animation-type="lottie"
                        data-src="<?php bloginfo('template_directory'); ?>/assets/web-anim.json"
                        data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                        data-default-duration="14.116666666666667" data-duration="0"></div>
                </div>
                <div id="w-node-b96c3b63-c636-2bc1-4342-3603b3c34939-511400ed"
                    class="c-grid-block__p4 c-home-statement">
                    <div data-w-id="df54cb2b-4933-3198-c816-2b5015bdf98e" class="c-content-blk cc--short">
                        <div style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            class="c-txt-wrapper">
                            <h6 class="font_caps" data-splitting>/ Introduction</h6>
                            <h2 class="long-gradient" style="font-size:2.5rem">We are a team of passionate, young, and industry-leading designers, developers, and strategists, producing world-class digital experiences at the heart of Silicon Valley.</h2>
                        </div><a data-w-id="1cb59165-78d2-c82e-0352-b9998f1c49cb"
                            style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            href="<?php echo site_url(); ?>/expertise/" class="c-button outlined white mrg-tp w-inline-block">
                            <h3 class="c-button__txt">Explore Our Expertise</h3><img
                                src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                                loading="lazy" alt="right arrow inside circle" class="c-button--arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="l-section no-pd wf-section">
        <div class="w-layout-grid c-sticky-grid">
            <div id="w-node-_1ac42f95-5d16-7462-9489-4a5187620921-511400ed" class="c-grid-block__p5">
                <div class="c-sticky__track">
                    <div data-w-id="3565254a-d1cd-7f02-8c19-6f58806a756c" class="c-sticky__blk">
                        <div style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            class="c-ttl-blk">
                            <h6 class="font_caps" data-splitting>/ Our Approach</h6>                            
                            <h2 class="c-headline cc-home" style="font-size: 3.998em">We create a hand-crafted digital <span class="c-headline gradient-pink cc-home">experience unique to each project.</span></h2>                            
                        </div>
                        <div style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            class="c-txt-blk--flex">
                            <p class="c-txt-blk__txt is--copy">We foster growth for your business by making your brand more compelling online. By combining data insights, creativity, and technology, we transform your customer experiences and enable new growth. We are always here to deliver the results you need.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="w-node-_750603c0-0a5e-c9a9-af64-5244a9dcd352-511400ed" class="c-border-block__left">
                <div class="c-grid-block__p5 cc--centred">
                    <div class="flex-sec-col">
                        <div class="w-layout-grid c-stats__grid">
                            <div class="c-stats__card-item mg-top">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">Sterling</h2>
                                    <p class="faded-text">A one-stop shop for smart businesses</p>
                                </div>
                                <div class="c-stats__btm" style="min-height: auto;width: 80px;"><img
                                        src="http://sterlingwordpressfmladev.s3.us-west-1.amazonaws.com/wp-content/uploads/2022/01/25000521/logo-s.png"
                                        loading="lazy" alt="The ACE Project charity logo in white"
                                        class="c-stats__card-logo"></div>
                            </div>
                            <div class="c-stats__card-item">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                    ACN</h2>
                                    <p class="faded-text">Providing support through the latter stages of life</p>
                                </div>
                                <div class="c-stats__btm"><img
                                        src="https://acnwpproduction.s3-us-west-1.amazonaws.com/wp-content/uploads/2020/01/amazingcare.png"
                                        loading="lazy" alt="" class="c-stats__card-logo"></div>
                            </div>
                            <div class="c-stats__card-item mg-top">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                    FMLA</h2>
                                    <p class="faded-text">A new name for managing the complexities of leave administration</p>
                                </div>
                                <div class="c-stats__btm"><img
                                        src="https://sterlingwordpressfmlacdn.s3.us-west-1.amazonaws.com/wp-content/uploads/2021/12/11180232/sterling-logo-black-1.png"
                                        loading="lazy" alt="" class="c-stats__card-logo is--f4h"></div>
                            </div>
                            <div class="c-stats__card-item">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                        Sterling Foundation
                                        Website
                                        </h2>
                                    <p class="faded-text"></p>
                                </div>
                                <div class="c-stats__btm"><img
                                        src="https://sterlingwordpressfmlacdn.s3.us-west-1.amazonaws.com/wp-content/uploads/2021/12/11180232/sterling-logo-black-1.png"
                                        loading="lazy" alt="" class="c-stats__card-logo is--f4h"></div>
                            </div>
                            <div class="c-stats__card-item" style="margin-top: -6em;">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">  Shri Hari Development</h2>
                                    <p class="faded-text">We take infrastructure development to the next level</p>
                                </div>
                                <div class="c-stats__btm" style="min-height: auto;width: 120px;"><img
                                        src="<?php bloginfo('template_directory'); ?>/assets/images/shd.jpg"
                                        loading="lazy" alt="" class="c-stats__card-logo"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </section>
    <?php
get_sidebar();
get_footer();