<!DOCTYPE html>
<html data-wf-page="6298f01be8fd682a511400ed" data-wf-site="5c51b8093dcfd38165099093" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?> |
    <?php bloginfo('description'); ?>
  </title>
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
  <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 233.56;"></path>
		</svg>
	</div>
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
      <div class="w-layout-grid c-menu--grid new">
        <div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d09-396a4d06" class="c-menu-items new">
          <div class="c-menu_wrapper">
            <div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d0b-396a4d06" class="underline-animation__wrap is--menu">
              <a data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d0c" href="<?php echo site_url(); ?>" aria-current="page"
                class="underline-animation is--large w--current">Home</a>
            </div>
            <div class="underline-animation__wrap is--menu">
              <a data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d10" href="<?php echo site_url(); ?>/works"
                class="underline-animation is--large">Works</a>
            </div>
            <div class="underline-animation__wrap is--menu">
              <a data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d13" href="<?php echo site_url(); ?>/expertise"
                class="underline-animation is--large">Experties</a>
            </div>
            <div class="underline-animation__wrap is--menu">
              <a data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d19" href="<?php echo site_url(); ?>/blog"
                class="underline-animation is--large">Blog</a>
            </div>
            <div class="underline-animation__wrap is--menu">
              <a data-w-id="8664b8d5-5b50-9954-615c-d263ca0c03e3" href="<?php echo site_url(); ?>/careers"
                class="underline-animation is--large">Careers</a>
            </div>
            <div class="underline-animation__wrap is--menu">
              <a data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d1c" href="<?php echo site_url(); ?>/contact-us"
                class="underline-animation is--large">Contact us</a>
            </div>
          </div>
        </div>
        <div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d1e-396a4d06" class="c-footer__grid-cards menu">
          <div class="w-layout-grid c-hero__grid menu">
            <a href="tel:<?php echo get_theme_mod('call_us'); ?>" class="c-footer__gird-item-2 upper open-intercom w-inline-block">
              <div class="c-footer__icon menu w-embed">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="c-footer__service-link">
                <h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d22" class="c-footer__grid-title">Chat to<br>
                  us now</h4>
              </div>
            </a><a href="tel:<?php echo get_theme_mod('call_us'); ?>" class="c-footer__gird-item-2 upper right w-inline-block">
              <div class="c-footer__icon menu w-embed">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M22.0014 16.9201V19.9201C22.0025 20.1986 21.9455 20.4743 21.8339 20.7294C21.7223 20.9846 21.5587 21.2137 21.3535 21.402C21.1483 21.5902 20.906 21.7336 20.6421 21.8228C20.3783 21.912 20.0988 21.9452 19.8214 21.9201C16.7442 21.5857 13.7884 20.5342 11.1914 18.8501C8.77523 17.3148 6.72673 15.2663 5.1914 12.8501C3.50138 10.2413 2.44964 7.27109 2.1214 4.1801C2.09641 3.90356 2.12927 3.62486 2.2179 3.36172C2.30652 3.09859 2.44897 2.85679 2.63616 2.65172C2.82336 2.44665 3.0512 2.28281 3.30519 2.17062C3.55917 2.05843 3.83374 2.00036 4.1114 2.0001H7.1114C7.5967 1.99532 8.06719 2.16718 8.43516 2.48363C8.80313 2.80008 9.04348 3.23954 9.1114 3.7201C9.23802 4.68016 9.47285 5.62282 9.8114 6.5301C9.94594 6.88802 9.97506 7.27701 9.8953 7.65098C9.81555 8.02494 9.63026 8.36821 9.3614 8.6401L8.0914 9.9101C9.51495 12.4136 11.5879 14.4865 14.0914 15.9101L15.3614 14.6401C15.6333 14.3712 15.9766 14.1859 16.3505 14.1062C16.7245 14.0264 17.1135 14.0556 17.4714 14.1901C18.3787 14.5286 19.3213 14.7635 20.2814 14.8901C20.7672 14.9586 21.2108 15.2033 21.5279 15.5776C21.8451 15.9519 22.0136 16.4297 22.0014 16.9201Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="c-footer__service-link">
                <h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d29" class="c-footer__grid-title">Speak on<br>
                  the phone</h4>
              </div>
            </a><a href="tel:<?php echo get_theme_mod('call_us'); ?>" target=""
              class="c-footer__gird-item-2 w-inline-block">
              <div class="c-footer__icon menu w-embed">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M16 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M8 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M3 10H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="c-footer__service-link">
                <h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d30" class="c-footer__grid-title">Book a<br>
                  consultation</h4>
              </div>
            </a><a href="mailto:<?php echo get_theme_mod('mail_us'); ?>"
              class="c-footer__gird-item-2 right w-inline-block">
              <div class="c-footer__icon menu w-embed">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                  <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="c-footer__service-link">
                <h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d37" class="c-footer__grid-title">Send us<br>
                  an email</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="menu__background"></div>
    </div>
  </nav>