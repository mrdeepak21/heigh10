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
    <section>
        <?php the_content(); ?>
    </section>
    <section class="l-section cc--dark wf-section parallax p-par">
        <div class="c-grid-wrapper">
            <div class="w-layout-grid c-your-brand__grid">
                <!-- <div class="c-your-brand__graphic">
                    <div class="c-your-brand__gradient-overlay">
                    </div>
                </div> -->
                <div id="w-node-b96c3b63-c636-2bc1-4342-3603b3c34939-511400ed"
                    class="c-grid-block__p4 c-home-statement">
                    <div data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3"
                        style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                        class="c-content-blk cc--short">
                        <div class="c-txt-wrapper">
                            <h6 class="font_caps" data-splitting>/ Introduction</h6>
                            <h2 class="long-gradient" style="font-size:2.5rem">We are a team of passionate young
                                designers, developers, and strategists producing world-class digital experiences for
                                industry-leading brands and small businesses in the heart of Silicon Valley.</h2>
                        </div><a data-w-id="96fbbb74-ce84-3c79-6e1c-84ff9df337f7"
                            style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            href="<?php echo site_url(); ?>/expertise/"
                            class="c-button outlined white mrg-tp w-inline-block">
                            <h3 class="c-button__txt">Explore Our Expertise</h3><img
                                src="<?php bloginfo('template_directory'); ?>/assets/images/icon-enclosed-arrow.svg"
                                loading="lazy" alt="right arrow inside circle" class="c-button--arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="l-section no-pd wf-section">
        <div class="w-layout-grid c-sticky-grid">
            <div id="w-node-_1ac42f95-5d16-7462-9489-4a5187620921-511400ed" class="c-grid-block__p5">
                <div class="c-sticky__track">
                    <div class="c-sticky__blk">
                        <div data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3"
                            style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            class="c-ttl-blk">
                            <h6 class="font_caps" data-splitting>/ Featured Work</h6>
                            <h2 class="c-headline cc-home" style="font-size: 3.998em">We create a hand-crafted digital
                                <span class="c-headline gradient-pink cc-home">experience unique to each project.</span>
                            </h2>
                        </div>
                        <div style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
                            class="c-txt-blk--flex">
                            <p class="c-txt-blk__txt is--copy">We foster growth for your business by making your brand
                                more compelling online. By combining data insights, creativity, and technology, we
                                transform your customer experiences and enable new growth. We are always here to deliver
                                the results you need.</p>
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
                                    <h2 class="heading-2 stats-numbers">Sterling Administration</h2>
                                    <p class="faded-text">Website, Social Media Management, Marketing Materials, and
                                        Email Marketing </p>
                                </div>
                                <div class="c-stats__btm" style="min-height: auto;width: 80px;"><img
                                        src="http://sterlingwordpressfmladev.s3.us-west-1.amazonaws.com/wp-content/uploads/2022/01/25000521/logo-s.png"
                                        loading="lazy" alt="The ACE Project charity logo in white"
                                        class="c-stats__card-logo"></div>
                            </div>
                            <div class="c-stats__card-item">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                        Amazing Care Network
                                    </h2>
                                    <p class="faded-text"> Website </p>
                                </div>
                                <div class="c-stats__btm"><img
                                        src="https://acnwpproduction.s3-us-west-1.amazonaws.com/wp-content/uploads/2020/01/amazingcare.png"
                                        loading="lazy" alt="" class="c-stats__card-logo"></div>
                            </div>
                            <div class="c-stats__card-item mg-top">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                        FMLA</h2>
                                    <p class="faded-text"> Website, Social Media Management, and Marketing Materials
                                    </p>
                                </div>
                                <div class="c-stats__btm"><img
                                        src="https://sterlingwordpressfmlacdn.s3.us-west-1.amazonaws.com/wp-content/uploads/2021/12/11180232/sterling-logo-black-1.png"
                                        loading="lazy" alt="" class="c-stats__card-logo is--f4h"></div>
                            </div>
                            <div class="c-stats__card-item">
                                <div class="c-stats__header">
                                    <h2 class="heading-2 stats-numbers">
                                        Shri Hari Dev
                                    </h2>
                                    <p class="faded-text">Website, Marketing Materials, and Branding
                                    </p>
                                </div>
                                <div class="c-stats__btm"><img
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
    </section> -->

    <!-- Baubfire -->

    <div class="content-container">
        <section class="l-section no-pd wf-section section-works section-block">
            <div class="works-content c-grid-block__p5" id="w-node-_1ac42f95-5d16-7462-9489-4a5187620921-511400ed">
                <div>
                    <div class="works-head">
                        <div class="works-head-left">
                            <h6 class="font_caps" data-splitting>/ Featured Work</h6>
                            <h2 class="c-headline cc-home" style="font-size: 3.998em">We create a hand-crafted digital
                                <span class="c-headline gradient-pink cc-home">experience unique to each project.</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="works-list"><a class="thumbnail-container undefined" href="#">
                        <div>
                            <div class="image-container show">
                                <div class="image-wrapper">
                                    <div class=" gatsby-image-wrapper" style="position: relative; overflow: hidden;">
                                        <div aria-hidden="true" style="width: 100%; padding-bottom: 133.571%;"></div>
                                        <picture>
                                            <source type="image/webp"
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&amp;h=187&amp;q=90&amp;fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&amp;h=374&amp;q=90&amp;fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&amp;h=748&amp;q=90&amp;fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&amp;h=1122&amp;q=90&amp;fm=webp 840w"
                                                sizes="(max-width: 560px) 100vw, 560px">
                                            <source
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&amp;h=1122&amp;q=90 840w"
                                                sizes="(max-width: 560px) 100vw, 560px"><img
                                                sizes="(max-width: 560px) 100vw, 560px"
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&amp;h=1122&amp;q=90 840w"
                                                src="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&amp;q=90"
                                                alt="" loading="lazy"
                                                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp'
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&h=187&q=90&fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&h=374&q=90&fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&h=748&q=90&fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&h=1122&q=90&fm=webp 840w"
                                                    sizes="(max-width: 560px) 100vw, 560px" />
                                                <source
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&h=1122&q=90 840w"
                                                    sizes="(max-width: 560px) 100vw, 560px" /><img loading="lazy"
                                                    sizes="(max-width: 560px) 100vw, 560px"
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=840&h=1122&q=90 840w"
                                                    src="//images.ctfassets.net/eqb1x10m46e1/16G6lC8DlOQYBvjjgtK1kQ/5ff4a045ed5f61c89ffa438c691f7476/00_-_Thumbnail_-_840x1122_C.png?w=560&q=90"
                                                    alt=""
                                                    style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="label">
                                <h3 class="type-sub2 project-title">
                                    <div style="display: inline-block;">
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            S</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            t</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            e</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            r</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            l</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            i</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            n</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            g</div>&nbsp;
                                    </div>
                                    <div style="display: inline-block;">
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            A</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            d</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            m</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            i</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            n</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            i</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            s</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            t</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            r</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            a</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            t</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            i</div>
                                            <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            o</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            n</div>
                                    </div>
                                </h3>
                                <div class="type-sub3 animation animation-appear">Website, Social Media Management, Marketing Materials, and Email Marketing</div>
                            </div>
                        </div>
                    </a>
                    <div>
                        <div style="transform: translate3d(0px, -200px, 0px);"><a class="thumbnail-container even"
                                href="/work/incorta">
                                <div>
                                    <div class="image-container show">
                                        <div class="image-wrapper">
                                            <div class=" gatsby-image-wrapper"
                                                style="position: relative; overflow: hidden;">
                                                <div aria-hidden="true" style="width: 100%; padding-bottom: 133.571%;">
                                                </div>
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&amp;h=187&amp;q=90&amp;fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&amp;h=374&amp;q=90&amp;fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&amp;h=748&amp;q=90&amp;fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&amp;h=1122&amp;q=90&amp;fm=webp 840w"
                                                        sizes="(max-width: 560px) 100vw, 560px">
                                                    <source
                                                        srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&amp;h=1122&amp;q=90 840w"
                                                        sizes="(max-width: 560px) 100vw, 560px"><img
                                                        sizes="(max-width: 560px) 100vw, 560px"
                                                        srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&amp;h=1122&amp;q=90 840w"
                                                        src="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&amp;q=90"
                                                        alt="" loading="lazy"
                                                        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                                </picture><noscript>
                                                    <picture>
                                                        <source type='image/webp'
                                                            srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&h=187&q=90&fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&h=374&q=90&fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&h=748&q=90&fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&h=1122&q=90&fm=webp 840w"
                                                            sizes="(max-width: 560px) 100vw, 560px" />
                                                        <source
                                                            srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&h=1122&q=90 840w"
                                                            sizes="(max-width: 560px) 100vw, 560px" /><img
                                                            loading="lazy" sizes="(max-width: 560px) 100vw, 560px"
                                                            srcset="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=840&h=1122&q=90 840w"
                                                            src="//images.ctfassets.net/eqb1x10m46e1/4mEGXgt1ZbAULLNGBxylr9/8d0b75b0443d2b0866e690d8b2e5594a/Baunfire_CaseStudy_Incorta_CorporateB2BWebsite_Thumbnail_A.png?w=560&q=90"
                                                            alt=""
                                                            style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                                    </picture>
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">
                                        <h3 class="type-sub2 project-title">
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    A</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    m</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    a</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    z</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    i</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    n</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    g</div>
                                            </div>
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    C</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    a</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    r</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    e</div>
                                                
                                            </div>
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    N</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    e</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    t</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    w</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    o</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    r</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    k</div>
                                            </div>
                                        </h3>
                                        <div class="type-sub3 animation animation-appear">Website</div>
                                    </div>
                                </div>
                            </a></div>
                    </div><a class="thumbnail-container undefined" href="/work/unifi-protocol">
                        <div>
                            <div class="image-container show">
                                <div class="image-wrapper">
                                    <div class=" gatsby-image-wrapper" style="position: relative; overflow: hidden;">
                                        <div aria-hidden="true" style="width: 100%; padding-bottom: 133.571%;"></div>
                                        <picture>
                                            <source type="image/webp"
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&amp;h=187&amp;q=90&amp;fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&amp;h=374&amp;q=90&amp;fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&amp;h=748&amp;q=90&amp;fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&amp;h=1122&amp;q=90&amp;fm=webp 840w"
                                                sizes="(max-width: 560px) 100vw, 560px">
                                            <source
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&amp;h=1122&amp;q=90 840w"
                                                sizes="(max-width: 560px) 100vw, 560px"><img
                                                sizes="(max-width: 560px) 100vw, 560px"
                                                srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&amp;h=1122&amp;q=90 840w"
                                                src="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&amp;q=90"
                                                alt="" loading="lazy"
                                                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                        </picture><noscript>
                                            <picture>
                                                <source type='image/webp'
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&h=187&q=90&fm=webp 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&h=374&q=90&fm=webp 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&h=748&q=90&fm=webp 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&h=1122&q=90&fm=webp 840w"
                                                    sizes="(max-width: 560px) 100vw, 560px" />
                                                <source
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&h=1122&q=90 840w"
                                                    sizes="(max-width: 560px) 100vw, 560px" /><img loading="lazy"
                                                    sizes="(max-width: 560px) 100vw, 560px"
                                                    srcset="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=840&h=1122&q=90 840w"
                                                    src="//images.ctfassets.net/eqb1x10m46e1/2j25qGEC9lMXKc0MqQ8jla/bd067d37960cd54418a84db378a48473/Thumbnail_840_x_1122.png?w=560&q=90"
                                                    alt=""
                                                    style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                            </picture>
                                        </noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="label">
                                <h3 class="type-sub2 project-title">
                                    <div style="display: inline-block;">
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            F</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            M</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            L</div>
                                        <div
                                            style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                            A</div>
                                       &nbsp;
                                    </div>
                                    
                                </h3>
                                <div class="type-sub3 animation animation-appear">Website, Social Media Management, and Marketing Materials </div>
                            </div>
                        </div>
                    </a>
                    <div>
                        <div style="transform: translate3d(0px, -51.9697px, 0px);"><a class="thumbnail-container even"
                                href="/work/optimal-dynamics">
                                <div>
                                    <div class="image-container show">
                                        <div class="image-wrapper">
                                            <div class=" gatsby-image-wrapper"
                                                style="position: relative; overflow: hidden;">
                                                <div aria-hidden="true" style="width: 100%; padding-bottom: 133.571%;">
                                                </div>
                                                <picture>
                                                    <source
                                                        srcset="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=840&amp;h=1122&amp;q=90 840w"
                                                        sizes="(max-width: 560px) 100vw, 560px"><img
                                                        sizes="(max-width: 560px) 100vw, 560px"
                                                        srcset="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=140&amp;h=187&amp;q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=280&amp;h=374&amp;q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&amp;h=748&amp;q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=840&amp;h=1122&amp;q=90 840w"
                                                        src="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&amp;q=90"
                                                        alt="" loading="lazy"
                                                        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                                </picture><noscript>
                                                    <picture>
                                                        <source
                                                            srcset="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=840&h=1122&q=90 840w"
                                                            sizes="(max-width: 560px) 100vw, 560px" /><img
                                                            loading="lazy" sizes="(max-width: 560px) 100vw, 560px"
                                                            srcset="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=140&h=187&q=90 140w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=280&h=374&q=90 280w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&h=748&q=90 560w,
    //images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=840&h=1122&q=90 840w"
                                                            src="//images.ctfassets.net/eqb1x10m46e1/6p4cQX2lQRf8d9CbPKARSp/6f8b963e327c48febc464a08473cacd4/CaseStudy_Thumbnail.webp?w=560&q=90"
                                                            alt=""
                                                            style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                                    </picture>
                                                </noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="label">
                                        <h3 class="type-sub2 project-title">
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    S</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    h</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    r</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    i</div>
                                                
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    H</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    a</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    r</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    i</div>
                                                
                                            </div>
                                            <div style="display: inline-block;">
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    D</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    e</div>
                                                <div
                                                    style="display: inline-block; opacity: 1; clip-path: inset(0%); transform: none;">
                                                    v</div>                                                
                                                
                                            </div>
                                        </h3>
                                        <div class="type-sub3 animation animation-appear">Website, Marketing Materials, and Branding</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </section>
    </div>

    <?php
get_sidebar();
get_footer();