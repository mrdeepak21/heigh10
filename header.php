<!DOCTYPE html>
<html data-wf-page="6298f01be8fd682a511400ed" data-wf-site="5c51b8093dcfd38165099093" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php bloginfo('template_directory'); ?>/assets/css/main.min.css" rel="stylesheet" type="text/css">
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
    }


    /* Split text css */
    .lineswrap,
    .wordswrap,
    .charswrap {
      overflow: hidden
    }

    .wordswrap,
    .charswrap {
      display: inline-flex
    }

    .wordswrap {
      margin-right: .2em
    }


    /* ANIMATIONS */
    [data-anim="reveal"],
    .line,
    .char {
      transform: translate3d(0%, 100%, 0) scale3d(1, 1, 1);
      transition: transform 2s var(--ease1)
    }

    [data-anim="fade"] {
      opacity: 0;
      transform: translate3d(0%, 2em, 0) scale3d(1, 1, 1);
      transition-property: opacity, transform;
      transition-duration: 2s;
      transition-timing-function: var(--ease1)
    }

    [data-anim="unscale"] {
      transform: translate3d(0%, 0%, 0) scale3d(1.1, 1.1, 1);
      transition: transform 3s var(--ease1)
    }

    .loaded [data-s1] [data-anim],
    .loaded [data-s1] .line,
    .loaded [data-s1] .char,
    .scrolled [data-anim],
    .scrolled .line,
    .scrolled .char,
    .open .menu [data-anim],
    .open .navlink {
      opacity: 1;
      transform: translate3d(0%, 0%, 0) scale3d(1, 1, 1)
    }

    [data-delay="150"] {
      transition-delay: 150ms
    }

    [data-delay="300"] {
      transition-delay: 300ms
    }

    [data-delay="450"] {
      transition-delay: 450ms
    }

    [data-delay="600"] {
      transition-delay: 600ms
    }

    [data-delay="750"] {
      transition-delay: 750ms
    }

    [data-delay="900"] {
      transition-delay: 900ms
    }

    [data-delay="1050"] {
      transition-delay: 1050ms
    }
  </style>
  <!-- swiper CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper-bundle.min.css">
  <style>
    /* hero bg change animation */
    @keyframes fade-in-scale-down {
      0% {
        opacity: 0;
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
      }

      100% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes fade-out-scale-down {
      0% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      25% {
        opacity: 0;
        -webkit-transform: scale(1.025);
        -ms-transform: scale(1.025);
        transform: scale(1.025)
      }

      50% {
        opacity: 0;
        -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
        transform: scale(1.05)
      }

      100% {
        opacity: 0;
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
      }
    }

    .c-hero--info-blk,
    #hero-pad {
      transform-style: preserve-3d;
    }

    .animate-text {
      opacity: 1;
      transform: translate3d(0%, 0%, 0) scale3d(1, 1, 1);
    }

    .swiper-scrollbar-drag {
      background: #2c2c2c
    }

    .swiper-scrollbar-drag:hover {
      background: #ffffff
    }

    .swiper-scrollbar-1 .swiper-scrollbar-drag {
      background: #ffffff
    }
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class("body");?>>
  <?php wp_body_open(); ?>
  <div
    style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
    class="c-page-blk--out"></div>
  <div class="c-transition-blk-out--menu"></div>
  <div class="c-transition-blk--in"></div>
  <div class="w_loader">
    <div data-w-id="014351a1-02a7-8159-3bda-c7ebf0a30754"
      style="-webkit-transform:translate3d(0, 0VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);display:flex"
      class="c-loading">
      <div class="div-block-12"><img
          src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
          style="-webkit-transform:translate3d(0, 18PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 18PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 18PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 18PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          data-w-id="e02aa7af-471a-dfa7-ff0d-55cb9cd518f5" alt="letter i " class="c-logo-i"><img
          src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
          style="-webkit-transform:translate3d(0, 10PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          data-w-id="1dde0b76-7fd0-63e7-5fef-b58d98613c70" alt="letter o" class="c-logo-o"><img
          src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(240DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(240DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(240DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(240DEG) skew(0, 0);opacity:0"
          data-w-id="aa9e721d-d5dc-8072-fccf-f6b39604d90c" alt="Heigh10" class="c-logo-cir"></div>
    </div>
  </div>
  <!-- Back to top -->
  <!-- <div class="progress-wrap" style="display: none;">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 233.56;"></path>
		</svg>
	</div> -->
  <!--End Back to top -->


  <a href="<?php echo site_url(); ?>" aria-current="page"
    class="c-brand w-inline-block w--current">
    <img
      src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
      width="65" alt="Heigh10" class="c-brand__image"><img
      src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
      alt="letter o" class="c-brand--image__o"><img
      src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
      alt="letter i " class="c-brand--image__i"></a>
  <div class="nav-button">
    <div class="nav-button__wrapper">
      <div data-is-ix2-target="1" class="lottie-animation" data-w-id="72cac717-388d-6301-32d8-20a95781120e"
        data-animation-type="lottie" data-src="<?php bloginfo('template_directory'); ?>/assets/lottieflow-menu-nav.json"
        data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
        data-default-duration="2.0208333333333335" data-duration="0"></div>
    </div>
  </div>
  <nav class="c-menu navigation">
    <div class="c-menu--wrapper new">
      <div class="c-menu--flex new">
        <div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d09-396a4d06" class="mt-250">
          <?php wp_nav_menu( array( 
            'container'=> false, 
            'menu_class'=> 'c-menu_wrapper',
            'theme_location' => 'primary-menu',
            'menu_id'=> 'main_menu',
            'add_li_class'=>'underline-animation__wrap is--menu', 
            'add_a_class'=>'underline-animation is--large',
            'add_a_attr' => '7d0200cc-4c86-f377-2431-ce8f396a4d13'
            ));
          ?>
          
                
          </div>
          <div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d1e-396a4d06" class="c-footer__grid-cards menu f-bottom mt-250 p-0" style="padding: 0 50px !important">
            <div class="col" ><a href="" data-w-id="f4d63999-cb65-7d75-e5f3-75b2b06cc970"
              class=
              "c-button no-outlined black hero w-inline-block" style="margin-top: 2em;">
              <h6 class="c-button__txt">Let's Collaborate</h6><img src=
              "<?php bloginfo('template_directory'); ?>/assets/images/right-arrow.svg"
              loading="lazy" alt="" class="c-button--arrow"></a></div>
            <div class="col" style="display: flex;
            flex-direction: row;
            justify-content: end;
            align-items: center;
            margin-top: 2em;">
              <a href="<?php echo get_theme_mod('social_links'); ?>"
                target="_blank" style="font-size: 14px;"><b>ln</b></a> 
              <?php wp_nav_menu( array( 'theme_location' => 'privacy-policy',  'menu_class'=> 'menu privacy_menu', 'container'=> false ) ); ?>        
            </div>
              </div>
      </div>
      <div class="menu__background"></div>
    </div>
  </nav>